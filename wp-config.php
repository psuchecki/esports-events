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
define('DB_NAME', 'barcraft');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dNt2=lA6I&D}T&??j ^u.a7vAEeREFk|GJ;{VXYjb X<9ztu{41~i/dZ5)xAy+o>');
define('SECURE_AUTH_KEY',  'n}=1+$*Y1zjz|>+wl`umjUMNy^]MJ-X3j[an $qazH-!M/z!.+JCf(jiM#}cVxpa');
define('LOGGED_IN_KEY',    '*9%4_Gdjb+XYhC`@@(xCONc pR|PEGO?zM+E%SA`GPPlN%;Moy5COwaN+HZyNiRA');
define('NONCE_KEY',        'M.1yNTJExiDw|B#uk6=SF7eU>D/*T+|4syv*@6lK%QyPfuvX :npz[Tvr0ou|oTh');
define('AUTH_SALT',        '1A|$yp6FsO%%QvHs~i2_XUaXf=dcr8 bZh=?JXAZ|sc(h/pGzV,0jAXT8V><2~M{');
define('SECURE_AUTH_SALT', '=pd=B6Z%fsL2z|Uf@IGfw196T-<Jkx<[ ,{DCw.]rN))?9i1)NvM uG+h2`z;z$i');
define('LOGGED_IN_SALT',   'y9%;l@o9tpaV+X?#@X)8I 7~BF21k,dXL@6tj~+;3A!N5M^/P,MRk3+8m9md}(S#');
define('NONCE_SALT',       '19>]Ka)f.X06--}oiD@`4$NhMn~%]R42ZFmk O%7RY%-u-;CF|PZHY^;rpA~t#2[');

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
define('WPLANG', 'pl_PL');

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
