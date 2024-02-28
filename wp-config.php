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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'Ian' );

/** Database password */
define( 'DB_PASSWORD', '7TuN4RguN@5gR3J' );

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
define( 'AUTH_KEY',         '@uTZfg[{d}(!nkJpjwya!gHruh}_zU$AC|.[DN#HRXOctx$42sl).HK}T,oO~X? ' );
define( 'SECURE_AUTH_KEY',  '4&kkGlcdpd7$<?~]$@v4slw7HKbkz94qQawS&<r`hP~*~5+0J<njQl$x.(J[cpf2' );
define( 'LOGGED_IN_KEY',    'mb>0YH-xUs>#1e,h[Nn;fWbD0]rg{^!FiQBn^  b`-H[A~iAukAw`5`[?av`gqR$' );
define( 'NONCE_KEY',        'RrP;iPs-SHpT -f4I ztbD.-ipVU{07B!csg7H6A<0HDDv/sbw]EzTd.z^ fqa(`' );
define( 'AUTH_SALT',        'NwXzP2S@N;8E|_-e_xqTqPsO)06NJ/{5d4plVj_)*IpmTX gc@`!H-P.+Z)%BToV' );
define( 'SECURE_AUTH_SALT', '/;>Tks,MDNS.)Yz0e=V[,<|S7;9o7E 6{:f(@KSsokmMlb.^)/Mp:ZxTux=D/|3_' );
define( 'LOGGED_IN_SALT',   '[6(NyX<D`=H*;@8V@2S7b>I+<TGyC])QeEth{Ba8SSI,O0tqX,VRI7M;EWsgK$Om' );
define( 'NONCE_SALT',       'u.U{ca25H_Z&f;=Xaxo;MI*VP^?g};e0}1&Sgp=&6Kml2N o1l[w5ym9Yeq)R[~{' );

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
