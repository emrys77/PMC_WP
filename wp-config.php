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
define('DB_NAME', 'pmc');

/** MySQL database username */
define('DB_USER', 'alien');

/** MySQL database password */
define('DB_PASSWORD', 'tU9XH7T5AdbXDnNv');

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
define('AUTH_KEY',         'U3Tz4raL=l`9cGjBnmo$ha~C%, cj<{}F bAS]Mv<Xe5T2(7}sOZD-Spd>;,},fU');
define('SECURE_AUTH_KEY',  ')PW5sTfLaASX}T%^!OW-,=(HmOYjjH,jww>`7:=Bdf.PUTT)MS+Z#=+/4/gVqi8g');
define('LOGGED_IN_KEY',    'e3*2NUi&>aWcvX.sXg0 w/I.;LJ*!ha1Z!YtFjS5g]kdD,.F53AjP/>6B6IyJAPx');
define('NONCE_KEY',        'ogD+*N]Ix{8(JQ-JNcn*k>e#uCtfwm(+1fz>JioWHe.Fam@CJQ_Q?Ey^V=q_FVFz');
define('AUTH_SALT',        '^A3S@a@_Yg)`]:r;yf<y+>4lhzq#T1om_z$AQgJe{8S6eUM0 [x?~o-gOHI4{_}.');
define('SECURE_AUTH_SALT', 'u`]qP?v=a*2w%L4mI`A7J}tVAVB46!I0E[FjuC6L5ODa[q%>6~bYKB>^Z[oqMDoR');
define('LOGGED_IN_SALT',   'hIG^5*AEdI+XBD2yZE`>C$mMova~>5?L8S(bn57[jQ_eN^q3^m0HchqU`:#y&?l,');
define('NONCE_SALT',       'Ek_6RX+ONE+@uAN44A:4MstlRch2/ I)>94xW/$~~!k<N}_SO]4A>!4)+tbK:[Ft');

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

