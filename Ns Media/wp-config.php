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
define( 'DB_NAME', 'nsdb' );

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
define( 'AUTH_KEY',         '{/s^el|(x:p#=3<i-&lqKz+SfrbW9cef;1knD Fih&}l$l%UNW, d+.9^zA4KW<}' );
define( 'SECURE_AUTH_KEY',  '{P$udRM^EbERw?;L7MJcH?N0.#I`A<V|%`IKM<ENWx2v+)-<lypjU:x_vsx(=lh?' );
define( 'LOGGED_IN_KEY',    '#%-tK* 1Lc%svh Q]]YP3G%(y]ElBxlx3?%_<nx6:pD$UJuE k?JTG/rKnRK `]y' );
define( 'NONCE_KEY',        '(2Eh.[F_]s?Rt}6*c,L>Jo!lnh2G8j@WHg@|szwM-Z#(L5e8^u^vOP -L:c{hp*?' );
define( 'AUTH_SALT',        'lVu>%+8BW)^qUi&_ 0@b1<W4`|XXAEe=lq&?p-~L KBkf($c8.Y%0F0};Shpamir' );
define( 'SECURE_AUTH_SALT', 'p4z!,WHVUzx]b<&?}oz;xyEqU2&gWW$#e)[4)jw#7N46>/HN1nJ+gz$/j[@#9|,=' );
define( 'LOGGED_IN_SALT',   '6t#fYz;i!HaCULy^{+~LDEBlFg&yXC_KX_Y72n7-wc{T&Ena|;}c4^i>)@U|Po*-' );
define( 'NONCE_SALT',       'x6H(|=Lt5iqD6Xg:$zME:^?tq]E3@8:{Qn)5.St}*5x1@Dz.tbnEw[@+LA5r.Gb]' );

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
