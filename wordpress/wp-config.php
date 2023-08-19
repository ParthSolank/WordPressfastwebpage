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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'nV4p,ew2B:B6Dvu[5pvP&r7h?!V&TKY`R2#~.6IywAJk3GaR3xl~bJofKv-s#MD ' );
define( 'SECURE_AUTH_KEY',  '8]t$!;}#7%mpe%_3NPtcaev>&z<8ze}1dkj^ED9N|MQbSgC&O4!4*KQk,uv#^5H~' );
define( 'LOGGED_IN_KEY',    'I>@yMscm7<pg}m|O*/XV;A?ib7V9Gsd})]T@h$JEm+[6:bMVc+ {(}< J5;b}}CR' );
define( 'NONCE_KEY',        'G2&)N=/kOpbwTlt>.pU*rZ<gtiRfKCxFuJ|sY~zO4jYzwnD6Fw-KlvM5FU(9l%=g' );
define( 'AUTH_SALT',        ',SSGWwU7:iZZh3Lr-[Jr!GbR~7EA.fRu1~4vdE;Fnh+|iibs:t}9$b}p)I}4uQn^' );
define( 'SECURE_AUTH_SALT', 'zFNL/6!+YV5d3Ag?c00KZFM_14|v?`yY9h (J)rK@inK0B1>P*lC3t_%>3hWtr%m' );
define( 'LOGGED_IN_SALT',   '/ ><iUS#j{D_pMye6#W8Fq>Qgl+d6D ^#L`_LI=5M),)RRiazIdYTZWQ,6`vkm8d' );
define( 'NONCE_SALT',       'aYR,Eyw3w7M/!:.`L[Oa2/Pg{V){UjZYT~}RE1x7^!m6Z@@S&lDVA]*--->RWh;T' );

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
