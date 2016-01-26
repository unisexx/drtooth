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
define('DB_NAME', 'drtoothd_en');

/** MySQL database username */
define('DB_USER', 'drtoothd_en');

/** MySQL database password */
define('DB_PASSWORD', 'drt0123!en');

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
define('AUTH_KEY',         '7;Z{=fP}M(?8hvJt$gm,0PCA&lvY5kJ2lg7[z[aZ&9+-y|-g{?ym#i@= |/Flh@]');
define('SECURE_AUTH_KEY',  '0;?c&K$SR|A|eFO@x{$,3E(bI|S1/l0wExz3SA=:`m[03!XvZlkjo {jMAVk#35{');
define('LOGGED_IN_KEY',    '2+g]Ato@zh4vXh0yzl)A2/tbdm?If=`34 e5hIEbDV+c}tvG`i7P1n;Ju#qt*0Ux');
define('NONCE_KEY',        '1+H;71iKV7r=Yl~4eu|gvYzH+1tC2vlw@S!rj*#7tYG!nvpBEFNg,.m(9k=*CC{3');
define('AUTH_SALT',        'q1)iP/n<(,uGf@8`SfAG-;F,ja:pn;Y!6s-X3cB 01*LE~?Oz`P$ca3p}EqwIMVD');
define('SECURE_AUTH_SALT', 'gPkoWZGM|_4i+6_J#qjJ)JJR.dC!j8-;~)<{-}2;vZmApp`Da3*PZetHZxF4##,l');
define('LOGGED_IN_SALT',   'U<&lv>0:3mf{ZOx!xif[XFzU<Q]MY)|6vF]:<]>jr^UF;s~TI2m.zFDbq^aDmTH ');
define('NONCE_SALT',       '>mT#5{xZDF-/1[)sYUfbDq21>=B*-;BUA:bvSy:0EO}-~Kq_;&A)QksPBB;<iJYh');

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
