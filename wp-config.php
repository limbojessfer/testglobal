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
define('DB_NAME', 'global_links_supply');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'u51IG!50q;+~AjVogl-xs#lLd;2g3XgG7@X:D/<|-&kH<VO3iKVxhp#9l=E!.sjg');
define('SECURE_AUTH_KEY',  'YWfdWl@OA422fih`C8.p8`OGhOq(]MNX,g%!3j`]U~#[v@`E&!L+1pP,ixIYo8@Y');
define('LOGGED_IN_KEY',    'n.+j^i GtsaKeb^{b+?D JsvQVDxo)Y;s:k.7Xd=xL9w$T3:6^Z zd]6_Q/OLUDA');
define('NONCE_KEY',        'x?Jke|Ma&5oCk%:+J-H8qg8%i>>TFlO_545FML_W^$PtB~=0a9h_N5|DwjlgI<>9');
define('AUTH_SALT',        'Tc`IGt}k;&n_4=;j1C$=)uLPtnzJD[(R3fG.HD^1)svH 2P[m(Nb#FMVtPu-@!]Z');
define('SECURE_AUTH_SALT', 'VD W/U!.UFlUoG$InjPWCiJ(01V1ogM0-j1!nNhmF1)?BJHM,K3#1p`z_n0*Ko9~');
define('LOGGED_IN_SALT',   'JKfEy#LmCN`rE[P+xoF1^Hy>~iD~O $NT5(s,IE0>H*>g0^$O.RTZ*5*@&B%;3nQ');
define('NONCE_SALT',       'cJ.W@i0!aKGew}i,AOceRJ:TGq!$CkkIv&4>^b/l^>~,7Mp<FD/Xf{{n?G{S1(PA');

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
