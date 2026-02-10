# ReAcademic - WordPress wp-content

WordPress `wp-content` directory for the ReAcademic site, migrated from SiteGround to a Cloudflare + AWS environment.

## Migration Context

**Origin:** SiteGround shared hosting
**Target:** AWS (hosting) + Cloudflare (DNS, CDN, firewall)
**Reason:** Better control over port scanning and network security

## What's In This Repo

| Directory      | Purpose                                              |
|----------------|------------------------------------------------------|
| `plugins/`     | All active WordPress plugins                         |
| `themes/`      | Kadence (primary) + default Twenty* themes           |
| `uploads/`     | Media library (organized by year)                    |
| `fonts/`       | Custom fonts                                         |
| `mu-plugins/`  | Must-use plugins (currently empty after cleanup)     |
| `index.php`    | WordPress default index silencer                     |
| `.htaccess`    | Rewrite rules (review if using Nginx on AWS)         |

## SiteGround Plugins to Remove/Replace

These plugins are SiteGround-specific and are **gitignored**. They will not function on AWS:

- `sg-cachepress` — Replace with a caching solution suited to the new stack (e.g. W3 Total Cache, WP Super Cache, or handle at the Cloudflare layer)
- `sg-security` — Security hardening is now handled via Cloudflare WAF + AWS security groups
- `wordpress-starter` — SiteGround onboarding wizard, not needed
- `worker` (ManageWP) — GoDaddy management tool, not needed

## Active Plugins

- **kadence-blocks** + **kadence-blocks-pro** — Page builder blocks (Kadence ecosystem)
- **kadence-pro** + **kadence-build-child-defaults** — Kadence theme pro features
- **seo-by-rank-math** — SEO plugin
- **akismet** — Comment spam protection
- **all-in-one-wp-migration** + **unlimited extension** — Migration tool (can remove after migration is confirmed)
- **broken-link-checker** — Finds broken links
- **duplicate-page** — Page/post duplication utility
- **shortpixel-image-optimiser** — Image compression
- **svg-support** — Allows SVG uploads

## Deployment Steps

1. **Provision the AWS instance** with PHP, MySQL/MariaDB, and a web server (Apache or Nginx).
2. **Install WordPress core** — download from wordpress.org or use WP-CLI:
   ```
   wp core download
   ```
3. **Clone this repo** into the `wp-content/` directory, replacing the default one.
4. **Import the database** — restore the MySQL dump from the SiteGround export.
5. **Update `wp-config.php`** with the new database credentials, salts, and any environment-specific settings.
6. **Search-replace the old domain** in the database:
   ```
   wp search-replace 'old-domain.com' 'new-domain.com' --all-tables
   ```
7. **Review `.htaccess`** — if running Nginx, convert rewrite rules to Nginx config format.
8. **Set file permissions** — `755` for directories, `644` for files, writable `uploads/` for the web server user.
9. **Deactivate/remove SiteGround plugins** if any were manually copied outside of git.
10. **Configure Cloudflare:**
    - Point DNS A record to the AWS instance
    - Enable proxying (orange cloud)
    - Set SSL mode to **Full (Strict)** — install a real cert on AWS (Let's Encrypt or Cloudflare Origin cert)
    - Enable WAF rules as needed
    - Configure caching rules (consider a page rule to bypass cache for `/wp-admin/*`)

## Notes

- The `uploads/` directory contains all media files and is tracked in git since the site needs them. If the repo gets too large, consider moving uploads to S3 with a plugin like WP Offload Media.
- After confirming the migration works, the `all-in-one-wp-migration` plugin and its unlimited extension can be safely removed.
- Kadence is the primary theme — the Twenty* themes are WordPress defaults and can be left as fallbacks.
