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
define( 'DB_NAME', 'arukaaaaa' );

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
define( 'AUTH_KEY',         ';-gcVeQ=scq<` OHIw}}HSlK&spU&,:l.E6!K?DbSSOI?mjpQMcUQXEVZ-y,J|7U' );
define( 'SECURE_AUTH_KEY',  'y@R;&URA<>=nZJTp$dZ6>o:Y>z ch}h*y(IFq;~|<vO9OU*<FS$G^.kN5Umh_)f]' );
define( 'LOGGED_IN_KEY',    '6PH*zd>T!`Rj]aB7nuQ~Jv3;&|5iw=u/Tk!g^c~,Gx*S}njkhYDiY#c.v=;EYB*c' );
define( 'NONCE_KEY',        '+-Gb&hmGJH!F q66wxG*-?u4QwTP-jNOUqsj)F+|(f4XQ0xzi_L;N0d3t6RRTfQF' );
define( 'AUTH_SALT',        'N4V=8D]l[^-Q#],PVD*$w[]3*_IQZ2._xJb_1yaY.YSz_6}ze(b]oPEvN_`*i=!H' );
define( 'SECURE_AUTH_SALT', '$ikOo5M|x$DzhUuex,E$dxh_!aRc(CFf0X^Y%}=Gs=NM+7?*+9c$u66<~{aYql^e' );
define( 'LOGGED_IN_SALT',   'xK%/KZZeV}3c-^.oNh&Oj.%|X5+aN=?]vN9v8A^xN]mjN2|iT=yyFT}lX;p{;Thk' );
define( 'NONCE_SALT',       '<vT=2pYK4wyKidk`Y*;C q&xp^]M.dG`8)61Fea%6{*Q4awvr(8OXVfsW i^CbTJ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
