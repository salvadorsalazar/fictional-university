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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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


define('AUTH_KEY',         'pRy/IXnoC4jjF7TDGmfVWb/JFCDX+S+N2D+XiWEkl5fpFoOEdbXCYHUjV/WUn/KYCJsaC4Sdi6fdSPaAhVWAFQ==');
define('SECURE_AUTH_KEY',  'hFZXlJxEnDw3JFprrHen9Z0IUXV3EyN4d0e5fNetpS/1HoqhbILI+tgfC974OFPMB/S+WqHqeVt7TWCxeEJCkw==');
define('LOGGED_IN_KEY',    '867DtihxVLUKro6VI5GxdxLwODxmfISf0AtnTVPOS4sx8+No+5b4uIVyXNwCi9WDKCnEeLmstPkcPJXGMAT9kQ==');
define('NONCE_KEY',        'yLzsBApnPHh39XSSuMN1my2rdRh52EDJj0nvV4Qa86m32jcXq1DaR0myFH4dspUpFcj6LWA3BWc2hGur0VDoYA==');
define('AUTH_SALT',        'J+LMuSruOnDZIT9rUtQNsLFTGgxs1EJ+LcF9kMv10yzzylYNvp/H2FF4SabomuuXDEYOE3QZtWvYMlQECgEqJw==');
define('SECURE_AUTH_SALT', '35h6sqOi2VTp6HVZWxDUN8cOy9a/mgsC76B0QivoO1jXmW0yaeOWkbIxNgC4BXzSKIskgi7lz/jbYOaJrMTm0Q==');
define('LOGGED_IN_SALT',   'LRly4NGctOvpFRif0BXGIEngaa9ff1JRGfpYwMVS5s07ik0YjLfnX4FG2EyRELfGXkv1gQncCBBCyc6uI77CEg==');
define('NONCE_SALT',       'lbkhzGp2OCXkyw5sdudQokTuQkioZXAZPAej35s4FXV1c8I0AWI9+j4XSv4jllrbFADl6WIQ/UtahYQOljduGw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
