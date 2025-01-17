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
define( 'DB_NAME', 'website' );

/** Database username */
define( 'DB_USER', 'website' );

/** Database password */
define( 'DB_PASSWORD', '3JE7*AKly27Z*F*W' );

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
define( 'AUTH_KEY',         '_6G$3vTvXH@j`SF/zV`by:^5;wVwu}jKJv+gX|F)8mAa<]r((gAoqnIw4oi2$WC`' );
define( 'SECURE_AUTH_KEY',  ' <g0S$)HhHl6[Gka7MP}%yT>)`Y~Rrcr)`staCTY(zxlA6?+]h-$8<$n81@,o+s<' );
define( 'LOGGED_IN_KEY',    'Ed{.ob]I=zpX/B%Q5_qkaH/Q!CNW qg76c)9iB/qk37[!):2|~^3e:y]BGPNM<ls' );
define( 'NONCE_KEY',        '`d].BDn}?/O+WQOvB)xC5KzC*dXNy.MTy^mZ$C%.Qpz%*j)#C8.;wcyLps]iYN9O' );
define( 'AUTH_SALT',        '?F<BiGGoo;z{As)%t7EQ$+}jLwq-;wX3FCHuBN+kfi?/p]8*8_gO/m$UnGG@thV?' );
define( 'SECURE_AUTH_SALT', '07_b$)5qKFrztN(=[@vN0oikh|ZK;xm}~=_*nCNO(.5h0sqL)@/r6(aQ,ZaTI0*E' );
define( 'LOGGED_IN_SALT',   'wU<+X8b&:Src_=qQ%hVh9Q4v|g>]SkP797TbcFm?KZ|HqK4!<+OxL9#XK@;&T>s;' );
define( 'NONCE_SALT',       'Ko@qb/:^iMOI+}<H(tzez(n4XM9IRr~m% $rw+5q!)|9LA]b5F*^%y#R9hNXLR({' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'ed_';

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
