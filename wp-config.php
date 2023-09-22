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
define( 'DB_NAME', 'wp-lema' );

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
define( 'AUTH_KEY',         '-vh$1e JWGv[^518#y;n+~6_h+~_G^ATmFu`V8R3&HquF<sqVt7UZjFW4N}yDuYc' );
define( 'SECURE_AUTH_KEY',  'q5=7UneY*.#,*p*2cY=3W/*f(E1V?q~@?<=&0}eg6MZNb<$t+A3 tboZY&`h1TQy' );
define( 'LOGGED_IN_KEY',    'l}+_9tuY-hNf?(u)8s.5%?+NRjI%0q(Av7/?Qzv8nnwBXDcv#i3RX_JsBD:~ arm' );
define( 'NONCE_KEY',        'Um4=E F34J17b :&E*:iqSt@ fw]{:@a`B|0`RX]u6_;hvJ]T2qD+/n&m%FEY+X*' );
define( 'AUTH_SALT',        'i?<w#$|4#j:s?gd+Fl[qAgSn7`3q%VS^d8wg&I[Oo@]Ih4H%D86/B25~0M+dT$K ' );
define( 'SECURE_AUTH_SALT', 'r9[+wU_  dmd<+6r]6-E,@`s=G^*v6 3Mh-8V(Y9$,_kA4c>&BLN5K[P&;4KTA3}' );
define( 'LOGGED_IN_SALT',   'zO<>#uX$4LIffx>+v<l3Hbe&T%uwUi2aiqe7|#  ,E[44lS-w^-*&vH?aL/|nx3w' );
define( 'NONCE_SALT',       'on^z+s:*qn9ZB$QOPLf=856#yBAgl4q,Xl[7aT7T]uDCC C62x4F]=I2:/_+&Qa6' );

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
