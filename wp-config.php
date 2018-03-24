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
define('DB_NAME', 'landing-one');

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
define('AUTH_KEY',         'u8+Qa93vSKCeI;r`._WG`a_fIz8-v~M|it GI;qN}]/m@IAJe)}dAC7m5Vo >YmJ');
define('SECURE_AUTH_KEY',  'Y6bG !F-]K~[2qts=$o<pB*H+S9R0d17U>s4Zd<egV)!vhWE9K%k*1vHFs[`POI/');
define('LOGGED_IN_KEY',    'h@ WTe>~Wn96pKI[>::z]f{!1g$C>c`y(#xYx5HlcWE&i>O,Bl_0mKli&o!Bq&D_');
define('NONCE_KEY',        ':~Fa B]7%mhbfW~*5vGdHZFRqg$R*^hMe3lgEf6p6bTtlx&II)pov {gPPS4[L2R');
define('AUTH_SALT',        's0EQeh{2hd|e4t@t TIY*#jb*[9EG3|e:5=pQmh6i{iF@Fs~<;-QRNGGGwC/dGZ ');
define('SECURE_AUTH_SALT', '%jHGcD#m@[zhme;4T[g1U 9FqCXRmhZ&ZO*4]i@!waZI:2J[OExW;?P=vC7X1`cb');
define('LOGGED_IN_SALT',   'g1|3wym[=u?FXfJVG}H/`C1^@J<4tpGY+|_S*^a]U;R^ ![%.Ptm&hi!^~HYAP<E');
define('NONCE_SALT',       ';pi8jxI]mt?wl{#/,RDJ(vZ?b<nD[eb9duQ3)BWtuah|KqU,cmv3i>p3=[H#}WH~');

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
