<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_playpals_live');

/** MySQL database username */
define('DB_USER', 'urbycoz2');

/** MySQL database password */
define('DB_PASSWORD', 'Bagpuss81');

/** MySQL hostname */
define('DB_HOST', 'jasmine.arvixe.com');

/** Database Type.*/
define('DB_TYPE', 'pdo_sqlsrv');

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
define('AUTH_KEY',         'Z5{A?}F4M>]b}VPU&l&+w~=;~s${(*g{DtSy<JiVxm_|@vgFgQ4;cw#[7AwRPq]P');
define('SECURE_AUTH_KEY',  'mXS1~BaRHq@9&PYNCZVf!UQpnhd:k-0r*}f*(m&EgB55EI.3*.j!(LyfpN]yLc#|');
define('LOGGED_IN_KEY',    'Cre[^_H|Dqk%FarO0!A8 @{#U%R~H};Lf8?0|xY3tcmXEQ>8VZ*ZP[p_WuTKm-eO');
define('NONCE_KEY',        'i<&G[wc-zTezJpPJF1haE@Trlh|,jYZE*XW eD^Q/n^n|-oar:1s[gk85,>~M7/v');
define('AUTH_SALT',        '_}rx!1kGS;/m[sBy_z9{XaC^%GRnc1Gq$kS1T;H9]KH{kw=giskl_D5jgm.UPt }');
define('SECURE_AUTH_SALT', '3Nh%G7x_oh&3%/XKr52MDlS7M^T w$1ce4a];hN-Frjy$N@^)#L  If;To7)mf82');
define('LOGGED_IN_SALT',   '*a`0HG<(/qLtrST&i|0?QXjC5Z&L1(gsg<#0w?ozdh55**~yPY r3EQfs0.i>xV(');
define('NONCE_SALT',       'n(3?4}M+J8Fpaxj^]gw3pv*~!z62{lI`z37/)>@!j6AW[f}4u3 [KFa/Dp3Pgf#%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/** Query Logging Settings */
define('SAVEQUERIES', FALSE);
define('QUERY_LOG', 'playpalschildcare.co.uk/wp-content/queries.log');

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
