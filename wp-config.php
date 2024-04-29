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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'toko_kue' );

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
define( 'AUTH_KEY',         '>CAlO>2Yu=Z{H@if7oIH)C!i~3I WtD{eP+Sv%A:IAx$C;`-e,Dyt5#*?sB>t=_n' );
define( 'SECURE_AUTH_KEY',  'h@hu= /#rQsj1{P(J>4.4ISZ(3{HN+f7H=/@0[C_H)o@t9g)E>IRyXJVnqaE>Tl}' );
define( 'LOGGED_IN_KEY',    '##%A|:u=:/XTv)#m=U%.|OE%{q?!*}8_9l2sDA#UhM5}^Q))HywKOefba%LK {n#' );
define( 'NONCE_KEY',        'aw;LN!B`@(>UeC<`1JEjAfyc&L5O.bm<Ws%$(??gc7]s}B5Y65#<PitNk<Eq+(&D' );
define( 'AUTH_SALT',        '5&X|eRq_rawl*:lDtMfw%V$@`tCfVF{b3KNz<#+R?!E><2xQw>_+S3TL3BwV{a80' );
define( 'SECURE_AUTH_SALT', '|zCLIpR$OlyS}[z?H/+Z?jO[sy?<EL7Yy`PxbzXsY_x&:h}b?hMl`;0;Wn-&m%R-' );
define( 'LOGGED_IN_SALT',   'Cu?7!d,-t+H|~YA3*@OHh|&*/V%WbyMmR.q.kj&j#so@#+{)XB2|*x$=T!=vaKn]' );
define( 'NONCE_SALT',       '!8+I;1.=KmD3HAxygv=O6EC!)PmLXw-r8Z==navIj{Qa/ZQx!xuuS<!UFayz;8#C' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
