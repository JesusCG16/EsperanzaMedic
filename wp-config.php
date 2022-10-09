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
define( 'DB_NAME', 'esperanzamedic' );

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
define( 'AUTH_KEY',         'lKggt:rOVg.qMjuY-.@0 =Pc$LgF/kj/%:~cX_BBZ ,>f*` Dq7aMR4Fj/T|,L-`' );
define( 'SECURE_AUTH_KEY',  'Ked!5/JpB+6mr*?ZE,PSF3<<8uyH{v5t0DS7:8V|?62s&HpH2-a=?ECdS_3}2 W[' );
define( 'LOGGED_IN_KEY',    'Y;PSH7Woa-B%MD[i]4CP2im_5Z8g}ikUj3K.x)*7v5g5h[e ZD%| M}h-TdHc@bk' );
define( 'NONCE_KEY',        'lE,^P?rJ9~U[:#CHcwoUq2drZbh%$QbK}gq5VI7W6B#.-v+n*q;` wxJA].M{PS^' );
define( 'AUTH_SALT',        'P@q;*=|.0.a&x66Q3<Jbl,4)oMLPy*WsV>_O`(vXM9Nwmv2c6|_i0m}!jfz7Ik27' );
define( 'SECURE_AUTH_SALT', 'wQaP`FWwM(<BUd+O9/8b+F.#>[^MD+uBzVn|}xIU&awkld8nC~{OluDjX$c8)O(n' );
define( 'LOGGED_IN_SALT',   'WL,FKL[]+XC`6GKF7,^7pkF~hsaCiMKlb@r3n@Gmo$wAgqj|If%{(OV7ojz@NI=9' );
define( 'NONCE_SALT',       'i9lvJUTpAiS)/}W2CXe$)[#XQQ8Gz~.bJvhb`S/B CoQ>b,-ptsq&H;JtLrky;+1' );

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
