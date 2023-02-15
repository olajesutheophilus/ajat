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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'J}Q65S0jK~:js+O}[sN.vm:7DBaJ6jk1H>`JMZ*xk{e/^J,Y?|]t|vm@[)9QFz_}' );
define( 'SECURE_AUTH_KEY',  'Rk+At98w t18z}F3>rBR2Z|v>hmZGf]qLSux6x@xkI)R_!Y*8B8?!gGExFAa`VxC' );
define( 'LOGGED_IN_KEY',    'ZD&i7dFBbE<ACE2icF#~U$a?%Rn1gXj:>vJbr/lWNp N<RyLaCkASM%Cl/8Tg5=F' );
define( 'NONCE_KEY',        '0/y^}le]!,7f[{WI6v&MLkGx/Xejd:uvT)#Tv?j$U)zDH|>y(IM?/{M<1V~BJ~RI' );
define( 'AUTH_SALT',        '+%XE8;$otmKjk$2m3;s||?96$:D>0tqzCBxvkF$+L6SxkWb=)N?>:Rk@}-27[%>N' );
define( 'SECURE_AUTH_SALT', 'jtyt5_>xri`K|9V/mhhatK~~d(!V0aF^,ZyY-:%LKTJ/&R/3y180xqDf0zb&BS}w' );
define( 'LOGGED_IN_SALT',   'e8_kMQUHgT2*1&96WSOw#n!w7r73jZ]DPwz,LV@L<f@:EN#ve$U:CCDnVPkd*uKa' );
define( 'NONCE_SALT',       '%eA_q+_`~q@@|Hv`z<q%ibzrln;sn^ok)t@-tDJ+|Ne$2&:0s8!YN uBh+*84pMZ' );

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
