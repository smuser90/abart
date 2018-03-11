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
define('DB_NAME', 'alexa_db');

/** MySQL database username */
define('DB_USER', 'smuser90');

/** MySQL database password */
define('DB_PASSWORD', 'sam$o7131990');

/** MySQL hostname */
define('DB_HOST', 'abart.db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd^R!IsYM^(Z<;lT~p8*7/iU/iJ]RGfW)Uwwe&^ADpxt(]W56,WfZGeywhGRBVyp*');
define('SECURE_AUTH_KEY',  's)WgE#^|]*tTw<6.NLHtRC9x|J(1A8$w-!T%?tmI4?:M:5tf/b 5V{5/Inuy@x9F');
define('LOGGED_IN_KEY',    '}%wk;r{pz#J=;a-2dCIgOqRwApAE7cNx>aG>%:|#POAfj!V%yZNA=LmCg_CHw/VG');
define('NONCE_KEY',        'L~#Wc79Y>4Wz.EcXjYl^#4-kJ( V[#>`%);1WM4 WO9f@RNYSkPxG$uE->-F{+RO');
define('AUTH_SALT',        '_uM95+4q9 CeE<4ijK/6jd$F`>Q|Jz``l>S{ar%_tv+^G D_+}P!D4j(lgV85`zK');
define('SECURE_AUTH_SALT', 'K2lL#Ex:#O;+B~hFj#YX<ad*Jhes?]GksC;vQo&,5H=O+)-%;LnCis0Z]Hsk@V?l');
define('LOGGED_IN_SALT',   'm@yw`riy3>#9mmJ+~t>M_C1&i;<i],1e#2<`tl!m}s)?E t49<c`G&V:.uBK6x)R');
define('NONCE_SALT',       '}hob5+@>wW}oAi,mUZ)4Xg=C[n?J8Zy<5._/H<]vQ:A{qJ<hOiK?c[kjy$#+HvY!');

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

