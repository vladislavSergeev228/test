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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mysql-8.2' );

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
define( 'AUTH_KEY',         '$l=-j@$oAO4E/(>q=nzycV54Tu5^{W9A~`~GH*[:`sN VsszyE6mY+[Rrq<f@zRJ' );
define( 'SECURE_AUTH_KEY',  'P:kViBX}.P&akgK(8qn+Kh=%6<<usF(P,qRcS$=9t?T8DX#8rW@K`%M86vm6Fq8G' );
define( 'LOGGED_IN_KEY',    '~6Dr!{_^hJK_k/Qh%d069C %G6pw[l_s)r.h>P3B&D7t8#4HB9$dB9MT/lzx5%l ' );
define( 'NONCE_KEY',        '!S:Ox>oR` E:no]3P3`i;,@FG>dzpQ7/cH2UVXikb;?w+M,7QRsbfm`FGgo-yToS' );
define( 'AUTH_SALT',        'MV}rAzt=uGZ2q[*0EpVQZJ8UZ+$#c8;b?${.4WjD1Z4 f?}pB+eh?EEm0Q&`b`+[' );
define( 'SECURE_AUTH_SALT', '#W-lea1~b-Lo;()gw~^Jh|%(sNc8Ka|UQu`u_H3`GI0[jy%v%MFi)bWVS3?6Ye9-' );
define( 'LOGGED_IN_SALT',   '{3V5Ojsj4?`f`Y|5wRI!H${#d2;9MI%(<2NQP7bbe6I#YH{W-d[K|2(@og}4wb)^' );
define( 'NONCE_SALT',       'vso+.3$nK|B}=U>zy!td?!pb:{s&a4A#U$RG0`q -_2#8%Qbun/FZecW[(oYsuU9' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

