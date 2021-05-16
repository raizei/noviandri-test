<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webbaru' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{!A;yDjk5HpG}s7 {.%Q7Y%Y0%H8/:J%(fy~G%Ur^9k!C=cziNrTHb@}~5xRhz;x' );
define( 'SECURE_AUTH_KEY',  'gT50f/K}@ 7([Nn=}oSin$WT&i-aE`DC%N|!LQ7.2W3T)EsDcioV_T4u>lqko|?b' );
define( 'LOGGED_IN_KEY',    '92jt-^`nFuOSuaUPS.%1DDYfs*k7BPms&`a4]y&}n{P`:VRN5B.B++TbU[Km5xr_' );
define( 'NONCE_KEY',        'PSs*j~I&PC?L[6ty`ga:C%h)-O6BT{OpYw)x6AQYo$7ZCAtJ45_JN-I|ae(W/y-/' );
define( 'AUTH_SALT',        'r:<uU(_!0xZBo;mLJ1$r8NYa(?b``(q*^(2(A%Yp^w5$UvLVzl97. ;p#4:#Ed<S' );
define( 'SECURE_AUTH_SALT', 'rT<nty?cxLg-I/m}Q,p,2Bqf?}$i$bHgw{Eu~rt6>Rj2~`&]qu|H8&gr$oEwV1&o' );
define( 'LOGGED_IN_SALT',   '9/qyV%X %^o&:<lLrvA-rvgTSWS}5{9go-Wk._F3%,WOjqlP99iN.Z KI4j*?>Mr' );
define( 'NONCE_SALT',       '>k5%CWL!;cm;G:sE-Oq+80px_0Yh6lexbtR^FP&fS)>lv=$8=fdr/nQ(qU79O;!C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
