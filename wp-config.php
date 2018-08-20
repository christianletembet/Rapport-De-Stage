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
define('DB_NAME', 'stage');

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
define('AUTH_KEY',         '|svA7)MY]YWE|m4PMKp-6dd3<jhG>PajDY6%_ex_Ps?+?6AmGOL^;MD=<8PrG_g/');
define('SECURE_AUTH_KEY',  'Cn~(_9YMh,lae0U~Nuk&(*!$ViuWoRv1*,$5J^=A9ATmx67y9l~mc^uC]&VXX!>_');
define('LOGGED_IN_KEY',    'p:_Ck6+TVu^ -t(+TLz@zdG|?-PfNrhQ+mkcgDn{0qjA/d&syM%2wD~O{4BVLO+r');
define('NONCE_KEY',        'ojg:zbkRnS+NXwHYKn7N$L@+&p#x@TacqN#ai*Mw%fPBJhODm*c~*t>o#f bVYP:');
define('AUTH_SALT',        ' l@[:VGAgCu67tc]J!MXQk`hz!ckq7+GY`loy7#@!p}cfyhZ0B`jUga4<o,U6e33');
define('SECURE_AUTH_SALT', 'eqV3&{x8~%+f$muovJ8mQx2>#Vt#@k]}+T-&tysb4cr3oVg7<DJaeFeiS0WL{]-,');
define('LOGGED_IN_SALT',   'NT`&v6]3YUwJ]rUY^&Q4e$pIoeq0~.G<?V@^c]8!`ZmMNJ$xSj)KQ%ii7=ycr}i{');
define('NONCE_SALT',       '5-KH=c:nw#9(y)NB%j^*iySaCj}7/k$KtR:99lRzA7_;}(Y(E/Yi]|n/[(skb!JG');

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
