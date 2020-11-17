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
define('AUTH_KEY',         'p0ox4J/6dpShP71DvS7/hPXcVJZEchCMulg9HfaBaOSjG8YjygpcHiIkiDgz0lG9kU5c+/zAQxduQJevb7AsAQ==');
define('SECURE_AUTH_KEY',  'T7AwR3ZdDWNUstlXJAEELjhZTgO08VD9A5Jxk6+y80MNmtCE1EmPjvVk2+gaoLAsJD8q1X6Ae8fWCiKrStVg3A==');
define('LOGGED_IN_KEY',    'IGCLDM5hW7F8zb8V+qy/kVsCQ9Wc0QrI2ms+zmwyjXz/86ewI03N4g4HWJ/5NLMz2TIW8ywCfGDy9d29zIqACg==');
define('NONCE_KEY',        'g1N2dIZ4lDW8TN73sU2sTf/X+fpPwxNrPVKzmUOk9d7eZ09UeSupzr0HbwKMz7YQPuqWeiGLCpkWNjepgQWAgQ==');
define('AUTH_SALT',        'iApoGdrGFRJ9vm63S9oRYxz/1leUYoGvP4u65L7sN2UrdDrnuG3MvzTXkMxbK2+QmSceDXsI4W45j/w5JL4/cQ==');
define('SECURE_AUTH_SALT', 'G9DSaN2pmbFQClfLY8oWzxkMa0O2ZKVq5gUrV36N+QT+m8PkfZBUWd+DNEveI6++wfPxYVfkCUW5c2kFVwo2dA==');
define('LOGGED_IN_SALT',   'NBmdmiWLYzOoACdnLYYDtyCsY6UmybJeVNOfbtMy5CS7d3mv0Wh8RpCx9AsyX/q349UlJmqVsnDn/4bTm+bI3g==');
define('NONCE_SALT',       'QOpuiUNWQLz00r+3+erar+q6cXu73oirQUhvhBzmSW0E/Htn+i0ZXGwFp2SmSNtqsh3Qv9W2eUsaSpKH5JMEXw==');

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
