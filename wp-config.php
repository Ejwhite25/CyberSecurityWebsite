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
define( 'DB_NAME', 'WordpressDatabase' );

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
define( 'AUTH_KEY',         'k+A{o@&xQbcx`GQqL}<YUywBA5#)fwumyn]x5l>P#l@RnVVlH+QVI3D3K.v(:%l{' );
define( 'SECURE_AUTH_KEY',  '$C9^5LmTVNV|{])e{}pXbTudE?^F:&qk>{ +3-NPvibj~3kv_%qOmMp9Pz!lNo%Y' );
define( 'LOGGED_IN_KEY',    'icg47T3SNP?0!/2k&57ka>fA#`SAS-g5i7n}*@_xM0g&OK<2W_L#{hZG~``sJ#&H' );
define( 'NONCE_KEY',        'K*kis+&hBCZJl%ganL6Nz}g(k_HUB#Tl271Y$V3mHiJ:|$ULGh/yP6us4CV$~QwJ' );
define( 'AUTH_SALT',        'f,02^HwR<Cg_B6)|J(lPZ?[1a9dBZ/,aAhED/vnt:mTmx1`hk*+^6O^1nidyK6tX' );
define( 'SECURE_AUTH_SALT', ']&$D6@E/m+/-^@dj6fPhUIL:qFb~<Dszgy+X(;3hd50hoF,4P;pM)sm5#4yZ4yv!' );
define( 'LOGGED_IN_SALT',   'ukVndn4I]@vfs?5p$^O$Z`WV1G^Q-~Q-:!Y]7XRZi6SL0AH?9`$W$>=;b))p;O8[' );
define( 'NONCE_SALT',       'lHL!^;g/UbkrUVvu]YT3YuW%!F}`~p.Iz+af8%Ns>KgdY9TV*[m/W`3uB9:9eU.%' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
