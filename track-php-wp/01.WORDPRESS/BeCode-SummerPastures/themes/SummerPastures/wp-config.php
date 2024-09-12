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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecomdesigndb' );


/** Database username */
define( 'DB_USER', 'ecomdesigndb' );


/** Database password */
define( 'DB_PASSWORD', 'SQLadmin303' );


/** Database hostname */
define( 'DB_HOST', 'ecomdesigndb.mysql.db' );


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
define( 'AUTH_KEY',         ';B2:5}IGEOMabA!Ot8c)g%>-op3MXBtMY.m%lFg_a0bgw)(]=+]nU7;P(@7 9g9T' );

define( 'SECURE_AUTH_KEY',  'q_w|Y3N$*9hNn.cd]X9<zS|@=Yyv~U]7L~WYb_W]yvthj|FBFx&C;YQ`p8?^O[?E' );

define( 'LOGGED_IN_KEY',    'N;5K@A !;j,YX dy0:XGSoqjk`tF>9`A3%@v+lSakNN#$Ky;@vvC9;;<-=8>W,!m' );

define( 'NONCE_KEY',        '{Ar4IiG?1]0@ccA[oQ|)^KevCk9=oLt$5;+&9N2MlAOkCE9CM&m4`GJXC 7Z9HLQ' );

define( 'AUTH_SALT',        'CTBCWsNB=N[k?5bd.I`(~_+o>9PkvS2241e?WR~OkF%IrdrxrI>VHa;jgpT7:~0T' );

define( 'SECURE_AUTH_SALT', '``,$,L~~ZL,$h9PQY-dd]O[ZKqyPc^s@2A-QmRthmu^|Lt/In/utLYKrR#>G<6xW' );

define( 'LOGGED_IN_SALT',   'XMdr0,1X:^WJ8nDgr4UW4qQuzD<)>=LIeHmxLC&m%+&@`U5UNg iih(#T0t$#JZ' );

define( 'NONCE_SALT',       'y2gxC<x@8,jk]SD+@%RBU@/;$,:|EKv$ )XWSpWkblK$&jR8>%1q+X}Go/DZ2s<h' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'BeCodeSummerPastureswp_';


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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
