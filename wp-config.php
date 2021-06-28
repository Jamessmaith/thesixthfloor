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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'unaux_28950413_839' );

/** MySQL database username */
define( 'DB_USER', '28950413_3' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p@91IdS78@' );

/** MySQL hostname */
define( 'DB_HOST', 'sql109.byetcluster.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c8rgw8vyah922dwvkbffcwjkchoykqrf7frxnvgnww5uufkk1zkorvu6vvkcuybg' );
define( 'SECURE_AUTH_KEY',  'q2p74q5tiw5ihhtxjhhcpwwpf9nnafva4iwf1nuu6dfzvyfrlzmxkt0ufhpzpsmf' );
define( 'LOGGED_IN_KEY',    '24pseui4jlctxwhlez8tplrihna34l0fn25jnltiqctyxra7kdezkffbscvoeksp' );
define( 'NONCE_KEY',        'wltpjsnrdk9vu3zubmk7ewsl2yct49ksj0hczrgcvfflnt1g43ahn5g1njdknriv' );
define( 'AUTH_SALT',        'np5qgpub3cfzizs8ilopbj9vptmcklv1vjei9sgbs6rcrdlfqppj0vkjqlmq12wv' );
define( 'SECURE_AUTH_SALT', 'p390qhey6t1ytddr1zqlzbiaghuuujcbfyfobdjzrkwaboq8romjkrrjs2f2wl6i' );
define( 'LOGGED_IN_SALT',   'wnr0ogqt0oreurjeszzr39emjfyndmtyexfukun5reo3p9vqoz3xc7rw41clyqts' );
define( 'NONCE_SALT',       'ctwashjzhsbq4noqpxpbpmwy9tqe1v9yxhajwcjur46ushth0jwjhrqiaekf2kbu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmi_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
