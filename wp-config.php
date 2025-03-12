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
define( 'DB_NAME', 'u664252469_20ziK' );

/** Database username */
define( 'DB_USER', 'u664252469_BYiYm' );

/** Database password */
define( 'DB_PASSWORD', 'HEqEfA1eIF' );

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
define( 'AUTH_KEY',          '8.DcWQl #C5#Ct<6PFi?=?5RXperg34<D+<1!rN*R3#|&MuIH5GS6SW-DvpWA%o[' );
define( 'SECURE_AUTH_KEY',   'U>rLq?LAS^~<W-!$H(l$292eHBa>3KIdac(b+e/?|Bj:_W9{B=_4Uo ]StbiP/MC' );
define( 'LOGGED_IN_KEY',     'wP5n`GuHQu<Kzz5Pxb^1hxBI3cijb,/M|1K-nY~)>1u#cn/#}+z$7u0a`@HYo-Ko' );
define( 'NONCE_KEY',         '9U3D+Li-I8I[Lt5%.Y@)v=z!lll#tFKbT*j?_cF[ Q}dJEEB&_U$z6-UA@g5q[lp' );
define( 'AUTH_SALT',         'C3zHjv0@VFsn=<+lEre+g~tKq,j<&!mIoe-Z(GxgAc#Ev~dvUf%5d|C7Liq)yG1X' );
define( 'SECURE_AUTH_SALT',  'pUp@: -PR,vn3uCxzD*?5_nhmj>nS1zW-7uX.wz?45fnYol7of,]kTS8I[IBS.G{' );
define( 'LOGGED_IN_SALT',    'Ex9IOf5q)^#]7U/jL~75SmHG3H|oSH9swo)}YL[-<Yv!}$u;#LaVJ>L~@OBFX,+,' );
define( 'NONCE_SALT',        'BoVI^7~n~QEkQ1MG]EY8rD)6qS$p+)Z?Q.x Ps<bpMvbN-sgo9f 4)g$YnTfuOHB' );
define( 'WP_CACHE_KEY_SALT', 'S+0=81LQn;@tGzPTfbjDD?9,kbb|+^I2bg<c2R;Z#_4Qo.l<;}mdR]<?A&u8if[I' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'c62813cfe7f4c6cb111c0de5c6c991cf' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
