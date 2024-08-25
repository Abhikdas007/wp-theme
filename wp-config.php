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
define( 'DB_NAME', 'wp_cus_theme' );

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
define( 'AUTH_KEY',         'KA2dX-zweL0fIZd[6!gq`m-gC/CFhxo:6:D4m5[hP6g;m[,J|8d]k.fg5W?otK$F' );
define( 'SECURE_AUTH_KEY',  'Bxo/#qt_,^?^JVArf`13/T.&`B_P#8UoJ-pU{3m~T3k8Xkbw|cbot~ZvPi`y;]fh' );
define( 'LOGGED_IN_KEY',    '3zDO}b]hvr=70^m}Is0x}a:8;TQ/CHid>mM^=LM|6e>D;WdXN(6/J%b.]w_%!*m)' );
define( 'NONCE_KEY',        'o,pb/TiO|HR6$S@9T0IH?M^!obDPVBYbzrlXXZh2w9GrzUB&!~tGjl04&aJLJMr#' );
define( 'AUTH_SALT',        '-C;}*ol>MpTP`(`d5QzV@ms1ZN*Taq-|HK  w@Jz*X7P%:m*Y}>S&0$EErpyG= *' );
define( 'SECURE_AUTH_SALT', 'toOfdq;ly3nKGs1L!8~k*{Z@7H^_5QNhmvF_{r.|##8Ult`?CA%F~N6BfkzZi32#' );
define( 'LOGGED_IN_SALT',   't6,FFDMaf-aLu3yVrd_-F{B=_-DQ97uxD!1Kw!lNJJs`](rNgC;g^hXkhxoY:$B6' );
define( 'NONCE_SALT',       '3.I)66f4nIl~@hU;t,Bfb;nTVlZkOa2UFh jPTq)k5(1gtf{?{Tuh,grEm*1<7rO' );

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
