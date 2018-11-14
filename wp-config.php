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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'T7YvZbkTcP7wOWqvNUfz+7BktIuRCz+rAX3rGCDNL3b966DXZjbUz9pNs8CEDKy5tLjS1IHXaLt0bVMy8pPAKQ==');
define('SECURE_AUTH_KEY',  'eNjJ4f77vG8u7mz0r92FXXn2Aof/BxDiVAhgzcR0zE1sSjqZ4IDYiyFBlvm544UeoKhJkYPSWJesSqd1I9Atyw==');
define('LOGGED_IN_KEY',    'qpjfK5KIq4gsbt+d3uVA1OHEMrBSG1ECPIeHjuduo9GLMZqUfdY61yZlrauC9c9rRiiBcTKJUPt02F8yMEKpUw==');
define('NONCE_KEY',        'xEkPMu9k7MfFu/Upv8iLfvyrrV+wqKxzyY7XDmde/PQLzjklWS11pvRowyhzrPGe76VLFcludNIZeCr0/iR9og==');
define('AUTH_SALT',        'gwROoYiMVad+8zC/sFSer1ja901pcdz14kVlJVLa4luJCT0p325A28VRc35x0oUJgrFCQg1pJzgcVlGOM7qesg==');
define('SECURE_AUTH_SALT', 'MpH2GrifvI2BXbBbrHqARP4CdiX64/2eaff+xT8mUvQ4LodQ4ppWwlmVITgcKEfH0MSYyZzBzQph6rEqvZGZYw==');
define('LOGGED_IN_SALT',   'WL5PhHWgIbEi37MDOeg8nxUkk/ENJw0I1gW202rrIhNmbFzGKsRt69IZQMbjOvQh4pyBN8HqesTmO6ZnIz4Cmg==');
define('NONCE_SALT',       'QoEWeCcppDk1tXK/zt43W4LJI+napzRq94PpzvqrSZc6bS6Y4ORQpg1E/BrkppLFlHfvbo7/XQGukro2QyoxEw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
