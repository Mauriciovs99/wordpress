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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'bobesponja1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|&0}|4#>P!q4V+S*-@u*6q,#cL|rssNP$43|I*(oal|%/WrIiP5@FR#f+-_82sGk');
define('SECURE_AUTH_KEY',  '$w]F^N&ZY|wUrL3?L0*Y`|?EbEubF4 a=&*U&oE53=2IE^_J@45r|L6R1Ap-j!;:');
define('LOGGED_IN_KEY',    '|8+8C6DH]MX(w!hi-fE2Adam #|=x]m-:JH ea|N<+[fH_c[D$r]5E|14z[_p%Ex');
define('NONCE_KEY',        'vqA+xStl;@.M:L%U*>(<#56,YP6G3/kG3&4{!;ASy8GK-wm/s-3O^_(@IYGi @wN');
define('AUTH_SALT',        '8|r%9`J5|C-Re,8JVny#B|Rl43cr-Wu Ul:;tYs!gDv]_GDd)eL-SU5%MC/[zgGg');
define('SECURE_AUTH_SALT', ' ,EI0l/7~qL4Iy7F#9%R|pKFi%lBzRL_|A{uYf~_*URM:HcG2mA`;sf3nDj^`I#:');
define('LOGGED_IN_SALT',   '1.E,^vd ]B8MtT##`ZN|1MM?6?H{|{fBA<|!A.pU*DLE2S=E-&AL&:lT+bi.;QjJ');
define('NONCE_SALT',       '^f/F;|y[IQ.q)jj9x <L/Y|eC2MLmF/98/y*.$-,<rUST |)um3yy>L0aGmb;0^Q');

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
