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
define( 'DB_NAME', 'lasymandiris_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '~rd[~6mNBZ6<p&Z^>;Lq2eP$;@-,wn4Iy09PejqKn)XIpD!cI< mpR(|VKqWtR`^' );
define( 'SECURE_AUTH_KEY',  ' mJLIRDhS9Y$(QUXXyr`Oy8n>ZtP}acm&^@)Z#OV 7vua~:|Zi<zh*!~lMxmqf}|' );
define( 'LOGGED_IN_KEY',    '=EbQf8G5%F`3n2N^*f9Gn&1<HPU#Nn6pu91b$>.C{Zf=L/]6IVcy/R n4~{mZ;h4' );
define( 'NONCE_KEY',        'iRyFn5P*q5>#b4:a)S:X*6^gI!;m(gknuru-XJ7t_Z0p2gJ+=Tjt9A3f+yVy; wA' );
define( 'AUTH_SALT',        'QSiw]gr7]z].^8xiRiP{f{[|,Z~_RF%JY@jACy/;A7@;+ZG}-&R+x1BeT1U)HIGn' );
define( 'SECURE_AUTH_SALT', '`3;.e0/PcBQx0{,) #KKj`D?G`mVXg<0)4y#gB{H;1*:Khfo%L0=WiD5q]C%`rOj' );
define( 'LOGGED_IN_SALT',   'vYElAIH) eYO*B?mj)Y)ppU+~/q6c^;Yj}lIK0sd?EMj,`!.,4y6Rx}-!%;q@k(+' );
define( 'NONCE_SALT',       'h~[Y8$HQ.vB~()VoMW`e|[aymT*n(mI+jv=lh^jh+PvHr(}a=(_~CwxLH<YHYc<a' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
