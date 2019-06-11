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
define('AUTH_KEY',         'Gmx+YWQlHKmqFKdRwW5ETbsP/Iwde/ABPfShfkdBTJnS7nuLtHeYM2wXyaRyODJ4MpLnn7WWuAFAV+9k1ao3hw==');
define('SECURE_AUTH_KEY',  '5Wh/s8e0rDu7qEYH6UiWsfjOz+ha+cx0MhHcCb/uyFqWNooEY3+8qJ5O5gnKOuRDQKi1YpARO7jy1Pv7FwRaiQ==');
define('LOGGED_IN_KEY',    'ju42UgvnJIyX7vbKrqAY8T91eUQiI7oaEbs4B+J9pABa4m9wiKnvnM/DotGt3mkdcEJtN3uQjt+Hju+jS+392Q==');
define('NONCE_KEY',        'slhOu/c7e+T4awmucFLScTWDXbub0q9B0WerXRIdzaZvZ4t3CKhYHEWxXGgEjf6/2qDhstNgaImEf3VLsee/aA==');
define('AUTH_SALT',        '/j0GIKs95k90jS86x9fcFXN4arrD2mihBfHmAmDU4ABacaCxNy6VhQ7tZdiR9XeL0OxH0ruD6pcEUhR4rwZkEg==');
define('SECURE_AUTH_SALT', 'cX1x1kowzjvMAcoHdJUV8PcLpSKGVM0U6Qvl1ObpkBzgYzPCzUia49+rWHYSyqtkf+6RAwsjh7MP18/mExalWA==');
define('LOGGED_IN_SALT',   'xD/oJg95rU4pUCGZjqZ/R8khfnAkvRYUsy8TQhA5X4TCboZE9UDhYaedo20dDHO+HlpetzoAH8mTX4+8e2FnWQ==');
define('NONCE_SALT',       'PyNxvS9jpBbvACpz1BQQ77kT5cVFNJXrHfkFIUiBohplr8z4c+D8tp0JWtI09uFuELxn4ODwTF6k017V3neItA==');

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
