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
define( 'DB_NAME', 'wordpress_plantilla' );

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
define( 'AUTH_KEY',         '(t:Wk^`LfQPumC-teW1@*aLDc;*(_P&PzV5Jqw<)@i*,wVXTC|)w=LaYLy,&FfwT' );
define( 'SECURE_AUTH_KEY',  'KRy;D[FyFb#Dnskuu-fUz!l}|i4?lFs %mxyPITu*&A1wyxH^`C*iLDNQV*YOT~O' );
define( 'LOGGED_IN_KEY',    '*lkgdmu_6y:*ofU$=<`..Q`{N?cwqWy^yn#wiCt`j4<u}~o}<x-ger4#c|w~XpG*' );
define( 'NONCE_KEY',        '>*l.NJ~UWEq>zXDbpSz-|-l^of(7B@^@]it<!S7b 6_m/#}-PpTra5,YrEk0[JLx' );
define( 'AUTH_SALT',        'QW/+AI%g`SgPbMc4{j7fjshNoe?D_HN?krU5$U{SXmL)r(`%}XQQnPN^ N6h_^2M' );
define( 'SECURE_AUTH_SALT', '}###,a<S@9hHrm:1-t{uhTe,huiB}0eaVe5+yuRn%xz?W$:.uBU+(?{A6%9P2h?_' );
define( 'LOGGED_IN_SALT',   'X>Ti|#lznfNz.L&RV5lB]1v%Rl;~5 $b< HFB 3xHz8|Q`2XYsBqw@#BsU7A)k/P' );
define( 'NONCE_SALT',       '1F~~5Sn_!&k;UY}HI@[iL;2@1X[3ZV;`&xSW<UGr[{+LJ/1|:6=f<x Jmu=_J5wi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'w';

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
