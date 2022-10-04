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
define( 'DB_NAME', 'wp_demo' );

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
define( 'AUTH_KEY',         'R|.og.jH&eZG3<@vE0]Np=A%aV?{e$kU&tWEi!eTa4hWF0MU1@BJ]r;g:.)Ie^Hx' );
define( 'SECURE_AUTH_KEY',  '(]*K-YpY/,|F3Y6_ppI^5sb2NtlGTuJp,TuHL%+t$fF,*4poUKx|+A`%>zkCMA5s' );
define( 'LOGGED_IN_KEY',    '%>|TVitXWsp8S7K`k3/P!rC~P&pMho:I-W&-|,Si@U PD.6CeX>FM?}?I1JcJ|n(' );
define( 'NONCE_KEY',        '0XT8l;Iar<TsHuJ1<qHQc8To4jj|#q G C4n}/;Yem2<d*MmhC~^1jvDs:wYm(BM' );
define( 'AUTH_SALT',        '$qVgRLKP$WA? +%fx/Hjz6 C!<]HD8Q~1m@]MqR9EOwN2|A6u;v{6Ct!W8G5>{C(' );
define( 'SECURE_AUTH_SALT', 'g<;t$80BkhKTP[vav%>N;Ga5gH*CyY`(Y*lMD=:W42jZD[k{lCI3ctEm_[]ynKy.' );
define( 'LOGGED_IN_SALT',   'HR@$p_@B?> krD[}ic:R`ZM6iAR.[uciD4_30<[2LZ`DQ&NyfDd$0M.Z{`YeCQ4s' );
define( 'NONCE_SALT',       'Jtw,Lf3kA)`XvO?RjZ0`<cU%7=<Z^|8moqM|v}_Y-`i*xq<u/TM|#)FXw8OXeZ!?' );

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
