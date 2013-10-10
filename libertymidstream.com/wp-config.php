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
define('DB_NAME', 'libertym_2013a');

/** MySQL database username */
define('DB_USER', 'libertym_2013a');

/** MySQL database password */
define('DB_PASSWORD', 'mCf9494cubic');

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
define('AUTH_KEY',         'Zu4jRa2~_z.J%Sp6nu [|?8A%{%`oI)w<=bBNTPD-.Y:IXX=t>VyC{t%/>)khCTT');
define('SECURE_AUTH_KEY',  '-)u,;oJ%p=0JI{&OP# . F&_<)K@ci[lY+uz9T~im&uV|,2o1Hr0K$|XeFaWk]p7');
define('LOGGED_IN_KEY',    '$s>U+Uj5rtuLtf+Hp4|VS1}St]i,b)|~lJFyy}>=`5.JL#F=d+um+@BLrMMd| }e');
define('NONCE_KEY',        'O*`xJXWXkRmPv{GrYQ|IwD+8Fx&j(on37*;1v<`#2BS-W0LA8tAJk9%Jfo2l9$k;');
define('AUTH_SALT',        'lf~c@RGGsUq/wA$K@nGsm5{c(l@:BiZj}i17%V7N.|g/UeV+Mtm+)P/o&.$nT%IA');
define('SECURE_AUTH_SALT', ' wB-j{.>sbs$2N/`6dYZo+mLE%_Ola7:YL&e:df$3S-.cJ)oJoB2z_Cw{jn~sgG5');
define('LOGGED_IN_SALT',   '=&|i-J4rBiW]m6tIuV%mG[}N:xOd5:8ZCb6vzC+>mR7$-++r0il&r,0Y`$Lf^`Jg');
define('NONCE_SALT',       'zbG](cx?g-=sN`YRk<NhQMIY$Cuv#eWibMBw&C<TU5tT@1eFFu5:Ef~[*uu?^.W1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lms_';

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
