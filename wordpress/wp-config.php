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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpeco' );

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
define( 'AUTH_KEY',         'B,PdE8{_:2=!i$01Xx6#E/4D)bR]0rrylT_s yq|vewe06(9Gm*13/%[vI,oS0|$' );
define( 'SECURE_AUTH_KEY',  'xQ`?[;T#y#$np3Xc&F@=P5JP[sb@X=T6@-#h|G#68<P%h_v^!m6N?uiqACNcYL,W' );
define( 'LOGGED_IN_KEY',    'qO};]KqUl[1EQ9w[AvLm,r1`:]_Q/*<Tm{thW:{i=:M%dvrE%!%AW*Cg*j]$b$Sd' );
define( 'NONCE_KEY',        'P7T52i=|DgaSZ~E##:d,G~R-W|npnpAt!B]3o5R$!61-i:GjN%/Qa@^M3MwX|lUZ' );
define( 'AUTH_SALT',        'E%3fy n,>57B}w_WmQrs=d/pd4#bNT>(bXG-Kr_{uR/^6Z2o+<G%<3#vo|[Z):Oa' );
define( 'SECURE_AUTH_SALT', 'nNI vxwF[eoV7+P)wWS X{E|`]5V@=fuhJ&nT0}Dabt_y]LqH.uln.TJq3U+3//I' );
define( 'LOGGED_IN_SALT',   'uBplZ&*kCHkaH#rs&SF{/izz~T$v;P/de!QktZ`j%msUf69q +;393j1>x<T^`u/' );
define( 'NONCE_SALT',       'j9%c0tRd6dSJ;J[h)4#t>29i+Id9,pq&`(Sc=]cJ?QY!7dU-pp8RXzc-^VCJgOyc' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
