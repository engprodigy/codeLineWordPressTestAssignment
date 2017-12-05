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
define('DB_NAME', 'wordpress3');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'tingate200');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'OO+o}&.U(SC,dk<|aye/@~lJ}nbpmp!7iF2SC*tPY[SG|6>./SR7uHSOk]!G2Z~m');
define('SECURE_AUTH_KEY',  'bE|CEw4{^~L@qI()K{q0Q]+c?|Zc~9>`i}ig8lvK!`l)l+G>|a1hZM^5%U>(>G-j');
define('LOGGED_IN_KEY',    'T<;]BarBc0zUj6?m;w(g)wc?L46lsQ>1H0ybV9N,oUdC]X?;;TyJPyizJsD>&*2O');
define('NONCE_KEY',        'SD{m/Z[.%33,e%pYeE>{v~Q}ncM|}TUDTBZX38u/a56X=(M=wWGfU3`p=oOKxQK7');
define('AUTH_SALT',        '3bohS=!z+WhIyrILIslLDjlO{XFAPL4EZZ3etdZgj3 .+o5(+4_wF7@QV=5;=}No');
define('SECURE_AUTH_SALT', 'If5#v65k:{H>CI@b@$VruZJiPkeC4<|:4hDv{!u:+PP%+d1Zt?x-1C&NCrN]ULy.');
define('LOGGED_IN_SALT',   ';WC0PboY9,yynm0Hq5Du.qE[=%xx[Ji!i4N%gyYb:N9K)An Ln#CxOzR4]hz_jwF');
define('NONCE_SALT',       'Zfyp?=+&6FI3.NK}WH[Ek[<gbZ&OdoLIL1l<gaH0BsvQT)W&&{mJU:7/IKpS2rr!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
