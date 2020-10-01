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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         '_55ew(CX[8)Y*E%fw0mj&&VZi3@o<AP{zo@LQn.,^uG?GUzfyUf$zm=Qt@$7s2)x' );
define( 'SECURE_AUTH_KEY',  'px)DK/zZ(%~k3&>e-`ZJFYE/K~X_xKsWE3aY^(-DJ@$Ys8q%t4^{/=l[v`Bad{,2' );
define( 'LOGGED_IN_KEY',    ';JI@P~YO4K.s)r/<u/)oiG/kNq5Qh^NK_4&Uh]hvE3)EAY}l+uySxh>y2uD/y7vI' );
define( 'NONCE_KEY',        '/_z_?JzA?|7 mSG?pkUsF/K,1rTe$t{2c(iZ=~w ZjdPZwccT}2-Y22bYtc=VMg?' );
define( 'AUTH_SALT',        '?ODuJ[VPdvBn&$( dO/22:_dm?YGQNHF%2VAg-IZXs4CI,N7ihnA@7!-T&fa3Rr2' );
define( 'SECURE_AUTH_SALT', 'XvUPv4fVUa9?qw&n_[V|7*6=sbD&p:@f!j$>-0.JK4RH^0PT1EB[q_Wc)D*{h]p6' );
define( 'LOGGED_IN_SALT',   'Qo=Hw#:rp5`4/U*C%Xv>)KC* ]_aWI~X85oYdo~u&y1US.;&*K`c7PVf5dfn[6xE' );
define( 'NONCE_SALT',       '+>q+bX]a=@@b%y&KduyAv0A*Etu+zS7#])W<U`d@ }-osm.nQh(SWuh&TEq<{sw_' );

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
