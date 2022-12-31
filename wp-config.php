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
define( 'DB_NAME', 'securitybeachnews' );

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
define( 'AUTH_KEY',         'Vq+v;0P=2vX9<fj2G%qRb1uF9Hz},0=At*_8/2*9~;-OhOFmmWMf QRMIO6]UV55' );
define( 'SECURE_AUTH_KEY',  'S&Vy`fsT|$Kz3},,SCfJB?[(HW4p~sqnl&?9o);%9}Uf#b/{fH&&$m@mMb7Dv?Hz' );
define( 'LOGGED_IN_KEY',    '$877OR,y/M|[lfI2=4X=W0[jo63FP,kmzD(GF8rLl)>3}T@ /WK,![Mkbp(Fx_Xt' );
define( 'NONCE_KEY',        '|{-94j0I>Q/#7 vhQwEF*dI^z8fA^U0+rq;)kd jFV3%zKdP~ < xZucOJ<qT%_q' );
define( 'AUTH_SALT',        'F#W]:wW#[#Bco&-!F5bl=!smqMg*XmOb/Y^YKtoK7bs?X8b&uGzi%KlEa4P#|</Y' );
define( 'SECURE_AUTH_SALT', '>,(0|]jQ!>*b#] :>M?s&0QstR&#bUSH$1GI;N#NCDNGr*jYh@)b@mC,K:C#d=Fg' );
define( 'LOGGED_IN_SALT',   'vvMM@bkdxF&+dcdA3YC;7@m:PA7zYudbAw81p^E&g+P|D>WXlO=[<zxyDGlp]WPM' );
define( 'NONCE_SALT',       '=efc>] edFq,CRh@<H0]P0!h4/?(V&=[O!Z/YhKihL{*Pf3lr|_,W!n-%>n6)9tX' );

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
