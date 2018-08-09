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
define('DB_NAME', 'doctagyneco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'doctagyneco');

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
define('AUTH_KEY',         'b&QWN+iN/CjJg<n!F,^Lb>:c|E|}=IY=KLv?.NfY=y_ABDS06~k>sKA0nbXOi]<P');
define('SECURE_AUTH_KEY',  '&|X5Qm~W{8|L|m>:NSPgRF!X*L&E`<b&`tMFONlEy*t}qi6%ER+@.}V|hJNIj{B_');
define('LOGGED_IN_KEY',    'AVt|72lXC#eCbH]-oza! #Q.o].&352Lggn1P!L`^[Z&ID$6dOLW@iR,Fx*H]DZf');
define('NONCE_KEY',        'Cl_pil.k)C2vLN136`GY^[KvL(L8|+]Zg[|fPP_Yav3U3ZPEho{x7QOW5Ga~tYhf');
define('AUTH_SALT',        'Yr-fK&i<3>g_jqLIJaq6XgOs~ipm3sYFM3>Hj[Q|6`4xpu+JGH]A9,nrjO#,a#{@');
define('SECURE_AUTH_SALT', '%1>!@+E&L/uoA@ph3ho=YMgzb$SU@1n8,wCwk1J^zn$Nh4:`J|2t;u[j1b]}pvVn');
define('LOGGED_IN_SALT',   '|TCptgT!bgnk<~RP(8.Ks-O)G/TigzMAWBH!@7b_4%HGPPK~OJXG1WUzhSU)e(e^');
define('NONCE_SALT',       ']X M&tW/mygCRbJ$_>Dk:xQCj^0&AfN!~eji>kWf1UYsw%@Hl3gz:}d.OO8S{3Y|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dg_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
