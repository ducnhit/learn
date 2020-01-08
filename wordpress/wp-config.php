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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learn' );

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
define( 'AUTH_KEY',         '.2D~gL(YH@cOa!YM}E>IFnMy6e*]W1RaAT%IgH=)BS/UQSqfDM8,ATbjy}kE5XvY' );
define( 'SECURE_AUTH_KEY',  'k(e,[$uCn?0~6;yuGP}Fc$4? /(*k$AFA;%e9x9pDSv.Hew7g0bMQ2HuR(rKK6vv' );
define( 'LOGGED_IN_KEY',    '?/cE9o-`ak09&~cbRyVj}R:rIQifw{T)NjLD+wNrW<~.eLJo7q1->RFJr{ufQf8|' );
define( 'NONCE_KEY',        '&[z&[;8da,^(=+_IkyqkY{CG|j%R5@!xHvlZ|-4fDet<%3P29#5z58U4%Lo^pOg|' );
define( 'AUTH_SALT',        '4>1.m59I`ru;6K~: >,PjP#m@P ^,%YWk_pP1V?TWAQV$|{;QYKV+-6KKIVq[l.L' );
define( 'SECURE_AUTH_SALT', '=n2-SlkdO]1S>;z,b&f>La#/Z)Fx({h*J@)&1Us[i+;D3]VgaT=,)&R })XrA?B)' );
define( 'LOGGED_IN_SALT',   'T&+cs8}%}Xx[Ff1MZ2^@3(BA`)t-yM1X?R3mA=V))t!qyW1J@=K}YPv9>sr.E(b/' );
define( 'NONCE_SALT',       'FI$1[ _!dgs/AazVlaCX]+)J%g$X<.}`-R~)(tQ++XdPKY$$)EiB)KHD]5DI_(rz' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
