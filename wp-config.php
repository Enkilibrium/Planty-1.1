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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')-GQf(jhJo9ckVb`hRIu$z>2U22 MflY??2l6I(WaHc=)a5Ss9yp4Z/0/i2>zG=[' );
define( 'SECURE_AUTH_KEY',   '{P`}KM({&fQ-{DO@r<2O7f4L22#wI7zHeSitiZ~L;uL%f}ki ~>1>?ftK)GVH9KT' );
define( 'LOGGED_IN_KEY',     '!lq>} DW8P4]U<G>^/4ua{Lq;w|VVup*_g.g?*I9C-&QWTr9~r5~O#!}-IG>8%J|' );
define( 'NONCE_KEY',         'g~y!)VrtN@4mr5iny<hq3[O0 Xwa8zZj@eT]$M,SH4it<$4|]l-Z3?l;G5dBe(@x' );
define( 'AUTH_SALT',         'd*V;=Y?HBk27g5<&R4z3Ik]V#A$SgGL#6p9k*<SL^uLIoUZIkpjHm)%dxR}cL;2h' );
define( 'SECURE_AUTH_SALT',  'I!}*#d?4a0^;+y]GeA4gQlonclp+.N1S3^]deHs8!NH4D#MN<-H>J#fMK7P4K<r#' );
define( 'LOGGED_IN_SALT',    'oa+^l(5#GlLhvxe%fxHjgNfb_]a^x&v7%q;Qab68k_^IydpCYpH1An3{54u,jo4`' );
define( 'NONCE_SALT',        ']Kv;X/Ut uoTSf9.0b4j|4Yu[}AS1U)rEG`tml!<.S9nY1$GWF(-;-|2}-@:)]HN' );
define( 'WP_CACHE_KEY_SALT', 't_G/j:<Y%v)L<;O<a03U-ri5Vi_7>mC(=Nw9kBW`]BTbF<Do14E<VAv4HF(dh2d5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
