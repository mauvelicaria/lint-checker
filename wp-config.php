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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '>5ha.6%9JfW:cCS{vW%nz:Su3Z<v<iLcA{B~_PjJH*R,qq&S76F*OspSX%kJexIP' );
define( 'SECURE_AUTH_KEY',   'RQ/Ze>f})cnOOkY1K/1VT%:(tQbITeb0D$/nr/n)=+7?njuB5(;T_<pQF/M03@ns' );
define( 'LOGGED_IN_KEY',     'k)d>yb#DqhlNn11Y%nEnm.3[V-e=gMQHKz*apzO,8vK!59xLLiDS0,xKBOpDq0_-' );
define( 'NONCE_KEY',         '3j@]|o?5^V%Rf`F]K@F}8+E+Mo`,FdIh{z%<(7Ed*>LQ7oIaPBk%[Ixm%-2dw(xx' );
define( 'AUTH_SALT',         'D@/<+bmZvMQP5WN95MERNz{%bdZzqav}M_QVTU=VUY?<7:o/`T~ESxh47sL$-V%[' );
define( 'SECURE_AUTH_SALT',  'R:;`ZL-bTio&vX(bG21:~N VV-}Kt3y-_wPEEfrOxk{}i^%.jVft(Czo1k5FT8#P' );
define( 'LOGGED_IN_SALT',    '/f,P0gvssAE26L?7>kB5TMKsx@bjx$7|m-Sh?mYL;m ry,at:U bJBL_):{/qz$:' );
define( 'NONCE_SALT',        '|~9{OrE~B>ld@aiaUl<,c8(te_m(7Ikm(^mU]I:a#*R@0CQ}%8TCER sk6E:8bX+' );
define( 'WP_CACHE_KEY_SALT', '!_y>njO}C:Q+yr1-4l#HsDb;pS%z^OBV1/h<5@E5^{}C!kaT9{#|MZt~%f57b~?-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
