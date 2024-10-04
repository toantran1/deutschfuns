<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'deutschfuns' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'YR_n*9VVXgK)TKUEI8(dg7WVvh}2G,d:pKp!cm-Wdj.SvdB+88j;o)|unpsmW:n.' );
define( 'SECURE_AUTH_KEY',  ',WB-vpCSpojOgU:xU1K.`g.}O-h1f/}~qo#6[U.}j o(PRdtO}Gg=!~jmBRxU4@%' );
define( 'LOGGED_IN_KEY',    '4t);$dx)(_Nj<!R)RdE#-}gj-:/6{[7P5;W_5MfVVd`sxe$GA(Xocmy4Kvv<x~Xd' );
define( 'NONCE_KEY',        'A0|-y0ibgQybM#=lpN(2A&D`<Yg(tgmv0wbzr:!>-l.!B2W7xOZM8V`K.&=Dd`~-' );
define( 'AUTH_SALT',        'w)UV[eHqC2[ncOFiaI5b<_$Cu|nRdiCVkkfeMKM@p! G(ZQKwN?Qv1qh8@!8QU!:' );
define( 'SECURE_AUTH_SALT', 'oE&0Y6bFYMOMzNfC!).TiH?>.ZsXB2re1k6xg%`<1zU1.]pKdr8]flfOlGgBo6q{' );
define( 'LOGGED_IN_SALT',   'ozt|@_ =1@RGCEE^Rn:eD@L9iX;e!i08ik.(^eL[1sNY>Vn/9%ygRTJ,0:O,zK#o' );
define( 'NONCE_SALT',       'oBIn%0]p,e0cnYcv-n.ctR$B2:O6JEQJuHW O=S$bE3rY| f!fYa=/#fE?Pc*C&l' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
