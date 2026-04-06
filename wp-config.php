<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings ** //
define( 'DB_NAME', 'reacademic' );
define( 'DB_USER', 'wpuser' );
define( 'DB_PASSWORD', 'StrongPassword123!' );
define( 'DB_HOST', 'localhost' );

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 * https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',          ')AQ/Yrbya WP -=6tqFe?#BO_gM8xclSuA~5Pj+0nR(c^OA3)U$.5)e7+WxXLX)2' );
define( 'SECURE_AUTH_KEY',   '/E:Ay^gi2NXspCt9i:]X6>%YXPXbZzm_hbwT.A65QAG@7^R79-DXNOe-k}OcNF_U' );
define( 'LOGGED_IN_KEY',     '^>!EAvH&V>BxeJ$3y44l#ZW6>wqdP</hYQ[OBXDSD2/|.PfIwR)`>1*l(*tH)?cH' );
define( 'NONCE_KEY',         'r9lDz)OeH8&OeIK[]5|QkZ-s3H-tOu.hL/2zxJ(&D] bW~>9PjKk{+!>KoFQN[u&' );
define( 'AUTH_SALT',         '<?F;_d#BnUZ@t7?E4b8k7F:[vQhW`mJeDJBJt:mt$Nk3&<3yHOa*TT5^fEe]Q^#q' );
define( 'SECURE_AUTH_SALT',  '/ E)M]aMseNUahKNXGtAv*COIGl@G:k>`RY=a@6S4hE`-`/taU/6M1J5[zx*q:{;' );
define( 'LOGGED_IN_SALT',    'gJ7 &C0pzuLAj|9W@6rd~$m`-R{3@~,Btz?f@-cFO5.!oYK|&zTqVVRv/)vIPVT_' );
define( 'NONCE_SALT',        '#WO]^o[dAMwn/ynQ9E2T5+]P}a?!~dM[$/vEKc]R]-8*xB-@{1& N<i.rGs:L4cC' );
define( 'WP_CACHE_KEY_SALT', 'T[Z+*u{,/&Mw{0A@oKW/:|FZ~6h4SFz$w9P:eA1eKe3{.:f*a`J;<;]D]6ln-_8w' );
/**#@-*/

/**
 * WordPress Database Table prefix.
 * Matches your imported database tables.
 */
$table_prefix = 'ede_';

/**
 * Debugging settings.
 * Set to true temporarily if you need to troubleshoot issues.
 */
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

/**
 * Allow WordPress to write files directly (prevents FTP prompts).
 */
define( 'FS_METHOD', 'direct' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';