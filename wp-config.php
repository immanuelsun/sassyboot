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
define('DB_NAME', 'training');

/** MySQL database username */
define('DB_USER', 'immanuelsun');

/** MySQL database password */
define('DB_PASSWORD', 'Kingdomsun88');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<GN-+P7~Ms<]_nrzg<|$M7j,u~p:iw:w#|V@/,At*sHLih^?Jzt45yA*,0=$eL*Z');
define('SECURE_AUTH_KEY',  'K!zG .];%-MW%sw6vP+(*~e,:-aOy9AmriK GY-FF<rT[R]TJ1M-c}D*nqML_|.x');
define('LOGGED_IN_KEY',    '.@:j{i Smh9<,v+$GjTIurxW/n}$]B*ce``4?b*!,Dh6;7tU+Da~L|i?_WS@Jgw/');
define('NONCE_KEY',        ')4k}U{d{)+T.s!^6RK8QCB3iT-.lG:acL##6cT>UQFav+:ZoR;j80o~0*lR%(%0(');
define('AUTH_SALT',        '}R^|iPBnBb}p9}jRX=0|0<>4.QHP4{#)&+2]4 Dj|ZV=TetrID.x[l^RHD8CsT2.');
define('SECURE_AUTH_SALT', '@z`EcWMJQc5aVVtHQ|C]!!%ObhpQHfnc&P<+|^vrGdP!@vo{L-S=0>e <zCl$OXM');
define('LOGGED_IN_SALT',   'e_W4mM#-g Jrt<$0Y^|ii{?(`VO4=fZ|w0Hb)Wc||nk3E7uqAj^Xb)C FrvKf]u-');
define('NONCE_SALT',       '#y^4aMMO}l^a~?d.F~?nH1Fb>SdD^lG2M3yU^m,K~Q*_D6+8&{2(j?EDt]0g9tl,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bs2wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
