<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'verbode');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'w9XFtL7gq]fA');

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


define('AUTH_KEY',         '$J[SE/i.2[<^;f-[#AUG;8WHNEEo^Tp4Lenuv_0/WHH*8e?j I|;#%W[xYy_-Pi?');
define('SECURE_AUTH_KEY',  'X>,U<wr(C%ek0<u!2$K+KC .TpH+<D<uq8P6@VgrC9QoI.c -v@sR?OrS9qBCg#G');
define('LOGGED_IN_KEY',    'p-h!Q!VMS6_{/E5B&del#Bg/7`L&y#Mtsbur86>W 4 q e%X2oc*qAj:dF}.lq?/');
define('NONCE_KEY',        '?5*q.TScOecji3nT1$qm-K.*]g,3x<lE)G/98pE%`}%FC9cy^R~JLFwOVn%J}8!H');
define('AUTH_SALT',        'Cg<h/|d|#ck?Ly|k*vImkv*c++Xmxz^r+~~:[!ZWjeBN-#UA|JR+t8N_M,N[!zcX');
define('SECURE_AUTH_SALT', '94=#D)}K!Z}6vo@+zY)q_gGOii8jB/qpk5<`C;>_ECE8@y{*;GDAw]hav=voWx x');
define('LOGGED_IN_SALT',   'L&}Oc-%&!%  T#h8JPUV|BgshW2uD?b6k7BZ&BO):LEk1|(XAN%#?-|s)#4xP`y~');
define('NONCE_SALT',       'Yq{$zkU]>?![MB/QOSAk4JKK:rC+^ &H3PJ0ZtP.|pi9RG{<7_ aU22jyo9:aL ;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
