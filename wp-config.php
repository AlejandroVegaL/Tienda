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
define('AUTH_KEY',         'QNi}xJ#@YzeiqsFu3:EQsv ]%h|@XWX9~08vDy| C_g&rypd$,g{c kE:%)(IjA@');
define('SECURE_AUTH_KEY',  'zUrHKV6/x4>~1Elwy<U@TF01AtrtjFkQc-^`G98KW@v8O4iV`/Pmr#7AbKV~lX<(');
define('LOGGED_IN_KEY',    'E;h&WSm6p8c~AiUd:bR/(yYn[/o5F;~&qnXBH{xv9jE-~uV1%cYG3j%>H: 7w2@9');
define('NONCE_KEY',        't]CEGP_tYTX[d6|6q}3A:Hvf}zd04JHoM&?|m2n/y$RYF5)8L#$2}&C~}NX$<2_R');
define('AUTH_SALT',        '}B]YmPrw28?w*c$p`,[PeA(|7@BoJ)ZR`)=nCl1(kc*gSlMObQ+Q.Cb@$}Vx:(BD');
define('SECURE_AUTH_SALT', 'YyoOoXWf-EG]G,XUJO@IVP#Hv?wx5%po$SHPA*$+G MpN3_}9U)JOAK|vFwwVO$0');
define('LOGGED_IN_SALT',   '}=z^29G%e;dtQ<Qy]oduq-w#c%Wa?ZI*Q}Ml.dArK?L]h{U_pLx89XN/h{zR6paD');
define('NONCE_SALT',       'VgO%/@:V{=4jSr,=vku+ijV<fcniiXE@:YjW>:~s-` NC@|N.8aiLj-x:Iz;!s~v');

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
