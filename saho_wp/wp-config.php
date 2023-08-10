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
define( 'DB_NAME', 'saho-akahoshi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'g[U#,ZhYi&`)Zh0M7vpm!,%j!Cp/+qC%-,L# &Z&te]Y}mQwIQntHg&cGHv)HW{ ' );
define( 'SECURE_AUTH_KEY',  '8Xkx2)N&)4V}<:-VbaUN6y8+h)]:NoI<)2ACi~?9-mRWx>V~%4ZG@V&C:h EK#wZ' );
define( 'LOGGED_IN_KEY',    'M}  X!h4mIX;,ay8m2m=LH<GXzcg}bZJ3xYPA~w;bCZW,IdnLg29EDe6-ZsxV=kA' );
define( 'NONCE_KEY',        'axEkhK?IoDU%c0!w!2W3|PR:;8M!3Y__p(CO{Lg#>?/0RaW`C<TC8g5&9x|d?X/{' );
define( 'AUTH_SALT',        'N7hu3lx+H3<xtHrr3Z1oS2viVvr:jE!H=PZGh[qOL0{t ]}f76s@tLzylP?Zs)W$' );
define( 'SECURE_AUTH_SALT', '* .::GL1ww>sP8bkJ@j/D<R~:G}%!Pj@t3Z-)3Ee.l]9owp`q,!/nfpaf;kU=bj5' );
define( 'LOGGED_IN_SALT',   '?a^.S>:~$S$mQ0kWta=Dbl)wXupdQBC%^k~&QA9N)e?jNL|Gkxkw,lPp/:M>=8@<' );
define( 'NONCE_SALT',       '&x~O.oQ;gRz$/*lruymbzW23mOU>T*JGUpx9^{Xs4]eTc{@Jj0Z@ksx-S{3Y| HA' );

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
