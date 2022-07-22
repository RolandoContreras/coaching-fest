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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'coaching-fest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'vER$NZ>t.mA]0q#Cq/J4GkV:;,sE-b@cm><!T:5y{]S-gsfnnCEv>6:*(1&V$ZE`' );
define( 'SECURE_AUTH_KEY',  'jg#Qws5!c&^SR9ti~+D&8ubQy.+k%~.KtXbVcWucns~).U]t`*yY(qRtC!8+P(lp' );
define( 'LOGGED_IN_KEY',    '$lpM[;Y5A@Q!T*l<;hL*IVm=O!Yf1<^/(`.BnZV)tL_zrymF }@#{?yySa(MbyHq' );
define( 'NONCE_KEY',        'KlUj|Mo)e~UO,yvPgZ.@K; Z!KW&4LMoeh:FD#[kw#uN9_hic>P2,Dy=:5jl5<!v' );
define( 'AUTH_SALT',        'fjq MK>XeT/5RMo-n&@?50y[sUTGe-/7kh}pia3AlKK#xI-$#c:(^8g7]TV>LFF~' );
define( 'SECURE_AUTH_SALT', '3^)Ru!z/3@kP e):Rc}k<%z!_FKXkZ2:;_cE-_+,Oc6eW+8aO?Ki8ygAt;tk~(I]' );
define( 'LOGGED_IN_SALT',   'Y@t[0tc!H:wz_5dLQGgUdM~Xnye]A%wN~$F)jlgZo0@1jNxLD@1h|#y~:kCm|Qao' );
define( 'NONCE_SALT',       ')R~dCIVN )i}?<G=[).dEMQ&su$&I7B YFQ /~ dG u1E7-xDI6e?W0IXf?N9`Jg' );

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
