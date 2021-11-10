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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Pe077q4m8d0HpqBaQKcDonwFYeAgmyFxxb0qDOAcDTautjnJTKvGDcs4txHEoOys' );
define( 'SECURE_AUTH_KEY',  'TUZWO1KI9TwKJF0zegGPmZYgvWexmaPHrpZxB02nbhm2epvHRRqzMMoMHP7rQuuO' );
define( 'LOGGED_IN_KEY',    'LBNl9IoNQCydqBidVlQOrlTI4QclEz1vTJBycShOJxr8uUoWcSsBsbcnrwMuaO8p' );
define( 'NONCE_KEY',        'DiAKsp2TxmzH7xsSBq1MwINbBK00WYajk4czMAyggMveLohbxTuD9B1Ybdsyu9K1' );
define( 'AUTH_SALT',        'zE5hzpmompnmlU5MckhvTPTmtUF89MFzAkeCabdXNKCtQqUFKCOCDJbgqLnbcU9Q' );
define( 'SECURE_AUTH_SALT', 'GZAf6hKaupxBcA7quERq0bwFmUSy3NabkxtLVp3mmRR0r3OSAq2sB4uH9V1y22Qt' );
define( 'LOGGED_IN_SALT',   'bhd5oVfsfgpZiTVybS7Na2dffxrWofGu2y08rUaeWflG3QdvGr21wI5nMg5p5OcD' );
define( 'NONCE_SALT',       'SyTi5sN2l5DX2w0qAwEo47rX8ZHOsVc0cu4yj4sOxMXE9dSRoxUoTyMbUcR1fWSy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
