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
define('DB_NAME', 'edm_commerce_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '|uoT)<!paPpX[9#n6Q1;ZGA++N.1,Y.c>yR}=8,?q17.tSK9_FL7t7,i0R:3Di63');
define('SECURE_AUTH_KEY',  'm[jaNt6(i68=s6X$;aP< zGnQc0]wgZu8_^9+HLH*C(R+Bm}n=-4Y`7$=M,W&>1<');
define('LOGGED_IN_KEY',    '=1F5nAR*_i_1)Yiorj6|~7<@;~^~oVN[~k- )?LfS|C+7+=w_OMraze.[SQ7j_9r');
define('NONCE_KEY',        'E6MKy}W E7!+|a0j=&piub~8yhc-d!UKBU2in;;Zv^@*35dIb+B6fP:gb-|)o!sq');
define('AUTH_SALT',        'P)K_z-6=C(Chmvf7mJ~_6u/:*HxAwzy+z pejRkOpMd+&7A-#uF_2T6Z?#*0_fu}');
define('SECURE_AUTH_SALT', 'g(Yfx.Koi;)tjo +d:S^[t|q{lWMXg*TJ.+8N/StN,j5/CF|}X9t2FC ?2DPwVm#');
define('LOGGED_IN_SALT',   '+^N8#jI1ae?!&n.DJ<N2Hou%V29q~w0Dw$JNK[EgHt=-4E-,EAIo|jo2W(6Id^[@');
define('NONCE_SALT',       'uMq}8PTx<6&w#;EXc4ScYw0LmHtt WurXmb7wE@}ifPI,1wNQ)8(hC9zVN$-1RQQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'edm_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
