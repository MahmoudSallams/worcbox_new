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
define('DB_NAME', 'worc');

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
define('AUTH_KEY',         '(e<=6w3$]}otf|e`_I*d51HS`{kwrON=a!,-o)}%/4d=<=_m&Izg4#HZZ ]EaHP3');
define('SECURE_AUTH_KEY',  '%Q+[7be_XMVj?b7NlJg2^CW@4wT8M(9.%2vUoU~dt8!$5Th/nCL)a,)LN, +zTUr');
define('LOGGED_IN_KEY',    'R%q,H0;DkUiG~t?7J,ChVkI86%q(<}1<Y>h?v{97Uj0Bp=x7bcdz*0ElAM1,mT?(');
define('NONCE_KEY',        ';,K^{pvAQh|cNGsQ~C~cG$o,c)^-MzZ3dFAs2N=G((S)-d<MzQZ|<$+2D`}[)-kk');
define('AUTH_SALT',        'cx@2oQP}.m~KOW]li}2NxhK~863WbRd%=Btwz(nBy2);.)p5t*ia{w9OgX`c6q@W');
define('SECURE_AUTH_SALT', 'vC_LqEm&p2/[-Bvsum.&hg?$bdkha$x[|n+@)a)g#p>5yhS4=QaD7Bfjt@kB<_6m');
define('LOGGED_IN_SALT',   'w)sfjp=C @/}r;`9ylRk^<tb;4{}xX5:2.W:+ni}*i~7@B$rA bcM&p}&u4oIQW2');
define('NONCE_SALT',       'I1[AUvayJeJV9X@}!/Esn!$]Ox!!gy/J4ao1>}](dmPg7WQ_KPC!|q(3*P,c% a$');

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
