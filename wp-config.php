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
define( 'AUTH_KEY',         'Lw+MfYu*80}g,_LMwIXXL9vr*m-%vv@UN.!ni(q8WF0qe_b10uT(A-(?}[)R@$y[' );
define( 'SECURE_AUTH_KEY',  'C9U.|Q4-10mf7C!-8=%G0A.FFaU1m/z<ofRTWb<(:Mwj_5!JA=[yP*>c1T+/5Tf8' );
define( 'LOGGED_IN_KEY',    'D(@Pa^/YPBaqCXBH].MM28]n_v>xANWa<MF/p&_O@]V~bzMp/wYC)-(;>uAP% )U' );
define( 'NONCE_KEY',        'f3~.t+HmbW}A0])| J6#s $8}60TkBf[iyz$HZM?@`!0&/!Sl R#DEf4;C:<}V(1' );
define( 'AUTH_SALT',        'e9]^QM^Pt#lC5zfL1#<Gq^we*Zh;9@Xh`>C-;4sz<NWdFB{EvP -}ir1T5V-+.rM' );
define( 'SECURE_AUTH_SALT', '- NiydMmx,*S.,&tsZN5lR>uCCsYAK!i&;@L+uQchA9fTz+tvGDK]L-qR:dv./|e' );
define( 'LOGGED_IN_SALT',   'L`3h3Zl*[^x];RZON=aOx~iU` a^WID>uD.SU?CJp(xg~.41(HQd,aZ|Hd)*/K&&' );
define( 'NONCE_SALT',       'B)uyH>$r@nbX%o7/sRVx2E#SAu6gqSjw1`:+V=/<W[T$[<e@)S BU|HW+-3zkJj;' );

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
