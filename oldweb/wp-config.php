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
define('DB_NAME', 'drtoothd_dt');

/** MySQL database username */
define('DB_USER', 'drtoothd_dt');

/** MySQL database password */
define('DB_PASSWORD', 'drt0123!');

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
define('AUTH_KEY',         'v*+ pY?RrX8q`*yUI R0o6Eg9TLI+Si ?/(<h%?VU}K/+!@*f+0j6peEi{vhrFH%');
define('SECURE_AUTH_KEY',  '^J{?yy=T}+8w j*aAk^xmrC0I_Qkxi1=SWJF-{uX`udB1uVL~=v{W-`EtJr-g)qq');
define('LOGGED_IN_KEY',    '5{lL7sDQ;I/%JeHiy39HQeF`H`M/tMgxCA6yeL44@|J_C}mm<4t){2M@B_c=;J#6');
define('NONCE_KEY',        'p{J$-hfI|YkF+Z:q:%.R|MOL-oCM.p-+-[mYZU}dAc0u*=A=t/b[I;ZqF>+@l9bH');
define('AUTH_SALT',        'PX)_#e-oX)l<|P{LV?/cR#xqUs DU(dUA03 l602-o2:v`mg*HE*NAH=SvfvX~y[');
define('SECURE_AUTH_SALT', '5gf@I)I+`^/KO1+u]!-v>zVe39=3c$D}&Iv#DEz8hY!-TTKt$_T>W*2e|m>-)Osi');
define('LOGGED_IN_SALT',   'FOBw&;x*yh&:08}34X@S|~mB1#xI1sDV#tFThn{]f-G2{ocUa>N2T3Hrs1f4;gQw');
define('NONCE_SALT',       'u(2.-T&~3Lxg0tnX+.gg}+[=e?*YG&5/<rsEtVv*z%pdU}K-tA-adU#DAG|R;pph');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'th');

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
