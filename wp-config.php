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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Zr56kDTw3M1g1g0pncWiZPXyOG0NVKqtcWGseqHHPf75C46LlZe+b8e9SXTYKHnAAcItNmDIyLzzIDg0FVgUiQ==');
define('SECURE_AUTH_KEY',  '+nPM0h8fffZ6zJu2ktPE4tjyVNGQ5SAMn84dhHr4i9Y6yxtX2SiqKZH3WrWtogAW2zW2nVfpaEoisSbnj6Ud+g==');
define('LOGGED_IN_KEY',    '6E1+GJgJrhgMb6F79aMeKSaa07af3qJFALpa4n6Hr8gbPzuSX/0+2czYZGB1SLwLi5sOObgPbai1ScBCIiW9OA==');
define('NONCE_KEY',        'ZVMefJBMUstz4mfhG8ji7yGjD8TK3UXOs64+18GM3H5eupipw0KLtBAES8EnIMoTqMZXJlOtA6h01yUBI6PyJQ==');
define('AUTH_SALT',        'mgS27yaJFoeeCGASOQb3Kg1d5BqSeRehqP/mNJk2VacdMLKeAi322Z6ZMk+D0AIqoCd49QUxpPqF/xNQ/s+d5A==');
define('SECURE_AUTH_SALT', 'owgnCbZ3Hrg27i6R5Z4Htz/4SMgyeKI8Bp1JkrLvXuiPu96BikXbszL6nhD8jM0TfWxhjkE8C1iZRVcHfSLkQA==');
define('LOGGED_IN_SALT',   'DKGPb4ntlIswdU1GfTZvgsgDwRldd7FaSZIKPMVnZYvyPTL8hAUZ1gcSNjzVPWlm6acj0K4E8dMD5Wg0RqiVow==');
define('NONCE_SALT',       'AlOu3x5lIYqL8KbBvEbq1m4YiCKErpGQTkaJKvBLE4gbekSFeK2jRda4vINWf+WLhkx19tjqG4p3VTfAoJK54A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
