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
define('DB_NAME', 'nexsense');

/** MySQL database username */
define('DB_USER', 'nexsense');

/** MySQL database password */
define('DB_PASSWORD', 'nexsense');

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
define('AUTH_KEY',         'Q@O~Y9hX/;2;BAbRTyb@[C~;!dnc,VaoLV$h4V8I;uwnJ:|+~A8);v@qm=Y_]r*X');
define('SECURE_AUTH_KEY',  '(XG; IiGj[g(fv3}8Wd|K@+R1fi31g~$a,<%nN%!P]T4FzbEmlP h{ES=Xe{eiim');
define('LOGGED_IN_KEY',    '02X]zKM9:$&r^h(x`iW/+Je=c+.hh, B-P=c%KLL3u|Y^_W0,iji)>$Ek7.229ty');
define('NONCE_KEY',        'y-{Q+y5RX<:2l22A.8(T@BtnzPy++tJfMUQ&=C=NXKnuM2oh^eN7E5hxehesj5K+');
define('AUTH_SALT',        'i:4NgjQ-h=27#{$Fj+Ih({^PN T+uo=oCiDC yMM6yLW|Zy4IZX.A_yX>Q|)R&[g');
define('SECURE_AUTH_SALT', 'P wir5iO QLn_t[^G:/x^_p<Whj&&Ul2(GUilKz8k5xavpi$U@LpPT75G&T%JHAq');
define('LOGGED_IN_SALT',   'WcP_E#V])W}*DP*!-b]4SI-?pjK|N+t7lH-HrArZvUPLbOi,Num>*zX,9N1CgN}L');
define('NONCE_SALT',       'dHa:BaA%PK4{wexYHFqV2w1mBcJwfLhyF)ffWRr4-3irEN+oPP.yN.|}/2pjl(#9');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/nexsense/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
