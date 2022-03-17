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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'virtualinc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ' Q+J=}Bh2Y@;9Z=B?=xyp`xBTv56,*r1CB4ltXduIa-S~g( FNgbU`#xD]H^f/ld' );
define( 'SECURE_AUTH_KEY',  ' ];dXNXA[[vl2-?eex_>1)8BAm38t3DD|~ #~j,9N(-lg)iS$cPL?~lCX&w.)GPX' );
define( 'LOGGED_IN_KEY',    'gnt#6KC:13>8Z=@67F<,.v5[tocV<~+SHsxbShgF?z-EL,t!+O,XG_Sr67X4>Wof' );
define( 'NONCE_KEY',        'S3}c!_U/&RO_f-|Lf8&jZF>% qVET?,y_^ljLN<DBYUSx&w_*hKYyqy,,0-9120I' );
define( 'AUTH_SALT',        'px=aTiU!YK+}DM3L>^Q ^yp/4CTb}AKa9>F#xy{r$1nq3G?oM[LmlbzYN{j4^*(1' );
define( 'SECURE_AUTH_SALT', 'laN?Q+nP.A?MCfj`[rEusUF;0gc#1A/1FtkdR(hKm_}({46W4l yER<gvWV2Nqp8' );
define( 'LOGGED_IN_SALT',   '50VS#%tp]/nMY-4Qj|cf9;p7i(6yjFeitP$SzKEF-]tLL3; UtKbT(!,9M1qOHI-' );
define( 'NONCE_SALT',       'h)pp+,MneU2dsyK-%>u1tb6HnDkl3c}AePP!Z<hf~E7VR#1v8o`PqOU}{hrY8/1y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
