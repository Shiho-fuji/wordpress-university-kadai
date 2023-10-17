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


define('AUTH_KEY',         'YLCSenjF/X5no58aPfeI3LkC45vqQByMcU3C5OYhQlEtJDfVuEFii1f3XVT7spLUwhGdpJiTk1hUn2zWk3OPfw==');
define('SECURE_AUTH_KEY',  'vd+PuR7SQdx44QI1yaY1MumYUUd7uR36cv7aLd1pj316yHkixX/7nNTEqT0QB0KRCJ6LX2c/r3qdHa6p8Jm67g==');
define('LOGGED_IN_KEY',    'EKNCUKBoehy3SPYouQta/KhAqWAiEjP5pWZNLCawbpqSEN3/NeUwCdgdK9zHN/VYDOleRkjz31AUA8GUqES/2Q==');
define('NONCE_KEY',        '/RvbA7OPJQsa6uJOfWjU5pwgBvXJOFN/XzgtRqgrkIuNbxx7NqDq6hpEiOoiFJ3SeAmDJfBLWVqbmR3ht1JUNg==');
define('AUTH_SALT',        'r4v90ZwaiMR6wGZ+bk524ZGAwPHwe4FbdENUgEojk3ZL6cNASLo1ENt3ZoLaGic5l+pGXuPD8qNVnl3tZDSOCA==');
define('SECURE_AUTH_SALT', '5+DX5Ng/RWcDbnPpnh3Nko0lGllzdh1iXG8F5DYdmNaCbyWXqGyiYB1tPRNmKp1UfjIn1T8pYYKV7a9sAX9C9w==');
define('LOGGED_IN_SALT',   'PDpXWH4ri3Vt7QkVIOwttJx8Evd8v2O5uxGom1UlJSp1F9ZkRv7amGG5JUPFEI/JfIe2qNjh7nTpbOMT5ddP+w==');
define('NONCE_SALT',       'yzFhb30REyAqZwZk6Q2YOAL4Gx4kE5heAvdKbsFlS6ZAHwhrQZeXrB4cgcfh42UMCLe8HhrBfopv1MFNaq4LQQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
