<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_37623674_wp181' );

/** Database username */
define( 'DB_USER', '37623674_2' );

/** Database password */
define( 'DB_PASSWORD', 'SPk7)7p5j[' );

/** Database hostname */
define( 'DB_HOST', 'sql203.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'o98tcbkb9v4t4mbzzjscv5kazaigoqqxi9zfsxnwohk2ie23d6sgxhcxqwwhvujn' );
define( 'SECURE_AUTH_KEY',  'u6a8qi3zxil6u0vvniezipgywqmxfidloki3smxqqstbutwenec4hunfimiq6wq7' );
define( 'LOGGED_IN_KEY',    '8hudx9epy5hi7w8hhlxhcll0hb8zmyn6wjmjzpiwnzbv9hinsgjwqkafmy7wieef' );
define( 'NONCE_KEY',        'hdqscwdfstx11t9exhb81ffw7kt9tfk5n2oj53c6xyvtk6mjy8abn472hcmqwbpn' );
define( 'AUTH_SALT',        'kmwiwqbonwxoyjsvhrtrlzcwgagrgkip81yx6hluuq6grktojldulahiqrbfexv5' );
define( 'SECURE_AUTH_SALT', '4ii5dxydpxu3xyaqczdluop0deombwdjqllyov38urewybhkosswtnvii5guhoos' );
define( 'LOGGED_IN_SALT',   'bf8iposgyeci9wukqcrihfda9epno6lrasd0htut8kfvyypwe3hwizlnevfqewe0' );
define( 'NONCE_SALT',       'pulbmdofbn1q7tuynitgsd2mj2lkwhtmn6edenjiwb88gfs2yjhmv0d9ezykxfdi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphh_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
