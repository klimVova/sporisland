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
define( 'DB_NAME', 'sport_island' );

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
define( 'AUTH_KEY',         '_4vO:n(V(WO<m7z#/tgPQ&84YZY93g>W 0A[khZsitI$A?]OTjn<dF|mhC<Vf[:2' );
define( 'SECURE_AUTH_KEY',  '7)&KK?Y^z3mkq[M|e}S>sR2Cj(O(O!RcR.SK182@f@0rfM*6cQBal[;a~ysD.8%x' );
define( 'LOGGED_IN_KEY',    '<x.ed<57Pq%Q%6T26o}de0yw3{$9 o|hJ[T=_c1#XD9~@Q(E%e59)L<A8]`yymy)' );
define( 'NONCE_KEY',        '}a~Oc zaWh?~#A?.:+TZ=>Ed+[!})#c_Z~7+%dj/}fp7+Oad`@DRd5~TNm1T]&y~' );
define( 'AUTH_SALT',        'R`XGy=_X(P|W0X;:k+8jQ8l4yx,Gra->:MN-pn sxj[Fi*J#:r@[^mm/VkL)Wc8K' );
define( 'SECURE_AUTH_SALT', 'FKs^.ybr^r~9n@B=E 1PH&$l*%?$fBc7[N*Go><a8-Hc`>TFN6DD_:>M*O2mO?AR' );
define( 'LOGGED_IN_SALT',   'kSvY->**u;)Gketcs9NksTowbTnY^nU:`MrVw1t@dH[W5%3;1;E2Y7m3K9p5)U:=' );
define( 'NONCE_SALT',       'Ap>=1@dt4&O|[K$YH%7AfRkabAo*~~}7SkA;WnhqH-RM`E}Tp,rFSQNLsg}C$W$z' );

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
