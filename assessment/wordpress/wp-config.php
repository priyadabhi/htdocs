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
define( 'DB_NAME', 'assessment_db' );

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
define( 'AUTH_KEY',         '29xU_$/C2}ou,U3<n?dGmv<MDFu$qFqO#77=f}TXjs^gdpy!.s {V?O$8C8v0^@0' );
define( 'SECURE_AUTH_KEY',  'kIP +59Zo]7/s,?v5q|+-ML=F~dq9.u*M<|@2[5*CB-rA-zN[z&h:J%`28KxvZt_' );
define( 'LOGGED_IN_KEY',    ',;AC`uggU?ttS cVS9Gd:1?3.Bz}hMiZazxh=Os)ZWSBE]WR?%JR(va T1di%tET' );
define( 'NONCE_KEY',        'G9+_^L7zP1p~?`@4ZKU8rl+w8Q!.K^/3h~Iie%LRkHCdrYkT{yYE2hbfq<6NLaVq' );
define( 'AUTH_SALT',        'wu45Ks].i^dr+/V[Air=j:@Vhj4#{?vwtWYk$q0>tvWH:`xB;Fj{h(2/ViE#k/ 2' );
define( 'SECURE_AUTH_SALT', 'd!a2x{NPf&8MDP55dkg.>BUF_W/;:V.=03,/SK$(kp.B%dw0N)SRu~V>gFF<3s0|' );
define( 'LOGGED_IN_SALT',   '&NVn85T]YPi$x HzuYsC>{p&X#p:xU.5&(F1$#|`[qh`dl O$xtkOF>u8In/i3,%' );
define( 'NONCE_SALT',       'Vwqkp%3Nv5-E*aBVv?ZL^<{gw84XWw?ch]&0P4thpXJ,8%zIH,Y/n3vkXAgAK5Ma' );

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
