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
define('DB_NAME', 'db_yolonepal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Manutd1234*');

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
define('AUTH_KEY',         ' (jw{Pt4=7l1CMI(RXI@UUUI|Y-OOUDr0>Q}aPug*o];Sft2yL^m`-$O*Etf>5N+');
define('SECURE_AUTH_KEY',  'UQ6x2^_ qo@YiBusCY]A`+>,YhbWv9B_~y%z=B?_8(Gm@RVCaxsk+!lUSH!q7ZJi');
define('LOGGED_IN_KEY',    'B}e9wve.~w)7X(.+pO]CM+psIJpC%bT;765Q*5Tu|g.Q~sfZ`:m=:|N_S~=M_t$>');
define('NONCE_KEY',        'lA!.+lYjDK#S:%[0^d}nC%eZ6CEIu|>_Y}7)dFb^_uP95o|)zR]~_>GR~e2D!+L!');
define('AUTH_SALT',        'Sb8_`*(?hDJj5}bx p9wxi=T|?r]jrQ^Hx19]iT3gLkr|)EfLSw$eLl`f405r[|@');
define('SECURE_AUTH_SALT', 'tp:p%W49RKkdm%AfevQt;<ft-0HNL3pf5,,Uh3^;G!4Lj*hkUki{=([Kla~.|>tT');
define('LOGGED_IN_SALT',   'gyf*D9YNdt8jCal)}2hrVIaK/8Atl<I6=W;6g4ogIW`[%Ti+k(K(pyj4?h>dl%}M');
define('NONCE_SALT',       'Z~@SEWGWsh/f3:~*MTs_dCs)LaXv`Z/GF16G~3,f};7GD;bTr+D%uQ1)ORvx?I1_');

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
