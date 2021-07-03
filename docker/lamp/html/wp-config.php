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
/** The name asdadsfasdfasdfof the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'topsecret777' );

/** MySQL hostname */
define( 'DB_HOST', 'lamp_mysql-server_1' );

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
define( 'AUTH_KEY',         'hfunKB1^;Y@u/C-D|U>um-O9=pCVi)m$*b   2Gm}20/j4crge[/QkwN{18PAPBi' );
define( 'SECURE_AUTH_KEY',  'efhc$>1S]9s|;HaUJ|,q1:w552l|F6SXhG]0Qw]X,| 0_qe-Wp_F/%uQ*H(oL*s:' );
define( 'LOGGED_IN_KEY',    'gedT7<1mz;.~_5r8G1&YZODq!NMhb(h~S#:1TAV#~9^[hkfIhsMe}LE_zb/EQ~@x' );
define( 'NONCE_KEY',        '6rF3P.u6}9 nJ46)[}4l8}y[&S7bq)L&$]8p;dp^2aIPR6p:3--96((bc*Y8^eg6' );
define( 'AUTH_SALT',        '8_{kbjEstU>aRqF8KNTyY,AnW^|6K}=#<K[J[iaA)kae3-=)kg`jY|t>[ Pm,J z' );
define( 'SECURE_AUTH_SALT', '(Af0G=d8*pn ,6u!?#Nmgd5zROyoVF>k|PgQUF?07=1;{,1ynF[Yo|kZmy;vfr!s' );
define( 'LOGGED_IN_SALT',   '%g;O}UxFi./J0r8KJ*j>ARwP1}m.l5;fhLz+ {%/&([M;H{*FBosie#cN}_rSzFz' );
define( 'NONCE_SALT',       'L}&C./I`z%fZ9@GA?Wkrhbc^=jmKxB]}K}$iaQ?;XBqw<xz*$=K-{b3hXz &JL ]' );

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
