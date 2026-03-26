<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbxmogxudf30uf' );

/** Database username */
define( 'DB_USER', 'udm1xgyw8jvv0' );

/** Database password */
define( 'DB_PASSWORD', 'ru4ozqcsho9e' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
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
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ede_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
