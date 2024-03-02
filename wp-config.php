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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'g~yjh_5S30Oaq+phAb)TiJ)u64P[KZa>S3by>=dSB1M/M0vI@ -G`;MN$nGMh?dU' );
define( 'SECURE_AUTH_KEY',  'EKMsPZIj]i7rx>ExMGe9z[)@O1)&3CV`~D{P`lztOJbCNB/k{7$P/q&@]Lu$Qlz(' );
define( 'LOGGED_IN_KEY',    'uYLpm1vacU-b_$krDLwb{tTW3${6ap}Z`zdue-MSDK2Opd^G8fZ7=kuz2]EBLyf|' );
define( 'NONCE_KEY',        '</!DEIs7$lg9KL|wQ}m{O^tv/zz>$z3SBzw:YA?MhOG*J|?-=c844]!Jw|=J>{U?' );
define( 'AUTH_SALT',        '%bp~<&nu`bvAF?^4q~CJ8O1 `,:Z>*vEh}RJ:>*q]gi3Iz8nqP<a}tU{iCj$/^`3' );
define( 'SECURE_AUTH_SALT', '@wF}! A^ID02(p?tI ev2?-Nff9$J!3(!(8)}A;d^lr2#B(69j~1YW2BiqY>L{Ns' );
define( 'LOGGED_IN_SALT',   '^5y7=i xwa$p|=eshQ:8jeAun0q%(.:G91NO<6d=5Auh>K>ZKkzw|@O#Qw{<=4V^' );
define( 'NONCE_SALT',       '|]a{sdzP2Rfz+~_,j+4vT-gVY<Ng11uD`}[K`%(8kNYGRy,avxExg>a@;}/j^QSR' );

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
