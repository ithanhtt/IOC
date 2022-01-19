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
define( 'DB_NAME', 'wp_ioc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'w!]1lD7yjK}PL&FVy(]=RS5 x/q.NX|<w%}m:~,|8oO^jFs5AmZDp[s J?U0yTk ' );
define( 'SECURE_AUTH_KEY',  '*G$j5vYTsgzxx[7V&?cM@~:RZ)4Taod!![Q!uke!W1l,3D_zVZEg;LBc .r6WnTd' );
define( 'LOGGED_IN_KEY',    'F1_ZJM4yxE)gQNYm ^3xJXT[dnL2&T{ T]j_</U.W.`?P=~e1N[~d@82}0X^Nfj{' );
define( 'NONCE_KEY',        'Dc!j,lsk%Ej!s&L?mW5u0iz#W,C=cnm ZS8++u-qG7QZ$F.<+H9GyK^vw&I7=Hi+' );
define( 'AUTH_SALT',        '|env-X@M*Si|WUo4,b1i%11ui>) *{AoS%tLNKbs/*pF,9@J>,Kf:3gQf[lSXZ*,' );
define( 'SECURE_AUTH_SALT', 'i.QL!)lzGXI=pq*TL]u]aV$4i2+)IZ^D.3oY[9JKbYIYF4d@q%?!Bp{VuWpkQ1lg' );
define( 'LOGGED_IN_SALT',   '<+T6d7tx06k!=B`/3u>[h#RFPx/_3AEl0b)-1^%>m!z0^a7`->in{u_Kl9G/C2/~' );
define( 'NONCE_SALT',       '<%IZ7-~ROP|s[=AkY2#<Y/gXcxAc7c/]o=O~1`l1]7o !KE3=@fGsw%<,07l]5<0' );

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
