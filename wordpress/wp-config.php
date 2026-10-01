<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_kui9s' );

/** Database username */
define( 'DB_USER', 'wp_9m5wm' );

/** Database password */
define( 'DB_PASSWORD', 'UUN3O8o^aHE#Pod0' );

/** Database hostname */
define( 'DB_HOST', '103.21.58.5:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '3Z@[7ktR;/cTJ1b1[[-v5dUi#+n52Q44:1|_wb4)XKHZ1oYvte!:c|:@B95S73Es');
define('SECURE_AUTH_KEY', ':O7z6oB_8XL&bWNF64gB6JF&rq)7340g5UOw06G*89~NU9Uzq&8;|:F*T*bGPXP;');
define('LOGGED_IN_KEY', 'i-:T%RPB1xD0yw3mx]D-H!(&x@vd-qc3Rs38r1@gkk%;1&ypM~i7l9dj376vOqn(');
define('NONCE_KEY', ')#[]rK7Y~6%64cul_YOhO5hZ*16a2R_AgscG9|yI]D55G8]GP9ah)-T!y8Z]+NC;');
define('AUTH_SALT', 'wQL|X9#xXj+]o9%d!MW9iYd*T~Dz[[#*]_F8qt;3by60-6A)y+Hct6AR8~u@]:V2');
define('SECURE_AUTH_SALT', '%t#24&9]h3/WTcv608q510d;h0FJzis_r3)9J[|w-AXadZ9Kr[9YtHjnN%7x_+#E');
define('LOGGED_IN_SALT', 'X_)WVY1j_!8A*3!w1-3@)%7[1Cs84e49r5(/37S|sCD0R;9x[BK3Tg9y6)_DvT4G');
define('NONCE_SALT', 'v5&/c&sIl2&vZtkm9BcM0;H[7G!Qslg6~5v5_7UnFY72-@k2(dy6QO92RF@1xI!|');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'g6rnjhvhu_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
