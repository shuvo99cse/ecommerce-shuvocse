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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'la&DwZFt?c^WRyY+0pt! 4.WK~;_W{CC.;qd&E@0V$@.kAQ?o`bl7JoJ`jGOJgf0' );
define( 'SECURE_AUTH_KEY',  'kOiHze}iZs Fc$Xh<!kX7H2{Ii>a5Y[-?ME7o7>t~>,NGrvudvhct9L&9nD+T{nz' );
define( 'LOGGED_IN_KEY',    '@@^)HmW+FE(gDVS_|_K^zN~lyz}C>NX!@@(%mQjPj_pzB&Fx:Sp$6zf6GD.u3YDp' );
define( 'NONCE_KEY',        'OZre!MR{GFF_j~H:=>m*<*A:!F_AGQ}{}[%|p~^?NFmUlq`P-d2si`7jRsqsf*Cg' );
define( 'AUTH_SALT',        'bJD>Gs#8vu`6cW{*a6NZX)GRBf&T&YY@Sa3B3^@:)[$1L-ctfDo/HjETLF8f*`L7' );
define( 'SECURE_AUTH_SALT', '-~1&qM+l&h-e+ $tLlxA}ti<d5+a{yN52=MfMFGRD-F7GD:<3n(.Z]cc>a=SLuy|' );
define( 'LOGGED_IN_SALT',   'D_/_+v`/Yq1#&Y^aNH,UI%|9Xn!Z_L*0jk8Q|cV6Qty/_a;%+aE3qZMy>hI(Qk/P' );
define( 'NONCE_SALT',       'T0{@-HD~whG@DZ(Z#/_WH6A;DehXSmAB/p3C1(8j*)<aY|Fa?g32,sKxr$/+7s3b' );

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
