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
define('DB_NAME', 'decadence');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'x|Ef{:_c7|v$c?k`^)_>*2oceIU~2[<JhGCQ2L,s0J}euaGmS]-x(yPNTQOh)Kx4');
define('SECURE_AUTH_KEY',  'p&)aYdjs8aP[r[+OC4Bch0:HB,F;3+WG>6xp1@ALjJaWuXScXY8YF?Y%Na2ne@Q$');
define('LOGGED_IN_KEY',    '>z`]u*9~~:r6EgE[M=!OKi%ZgMZNU0-<j#9}.W-!:*+kxMEy&qllqC>R-oj^DzS9');
define('NONCE_KEY',        'ZE7ct<Oj]MaCKa|#j?M_kwR]d9fmcHEQ=/$4PTsDDZR,g[ jqb-AK}FrL k;9xQn');
define('AUTH_SALT',        '+K)phvIL/4mWMF3|)$^OyCx_Xm_dhRwm];u:^(9@,4pA.]vot{JRe~SjB(]2J|V]');
define('SECURE_AUTH_SALT', 'YtGIk=tkcMJ$~8Z2[i0UAsDfNdyo:H[>Uvk4-qseJ=F6jswzQdD*9qM*Aqg4n/jd');
define('LOGGED_IN_SALT',   '/o) s};`B`+4I8OiGc_@)VfEUZ5 VktBl8JC]LMO,|]lh.1mWBfSLyiaRLBbp35z');
define('NONCE_SALT',       'Y17vPb6~gni:a^+0Sj}P@^NL%T#NKr=4wSyfN&~j=I{{!K%gMO>;9SE^CD9Qkf63');

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
