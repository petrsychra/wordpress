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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'oDX;Ww:uVCTuCz^k&A`y;Y*.IcT#t`c3ynAdrw%zOxq:e1`q+NGj_zX/NRh5EqW0' );
define( 'SECURE_AUTH_KEY',  'y/M$-,xC_1eSYyCd_HK?h%*~8T! P1iyV<8R}X@lSAm7{YQN#U,ol^5Tn,(>$LIE' );
define( 'LOGGED_IN_KEY',    'Q)fJags/;^Pif)uwI]|at!CO9+96A(1?% lGe~U<ut{a#/ G_817cmoaL^o1{q3.' );
define( 'NONCE_KEY',        '%c!o;eFa$]V_*~HWSam^IM5hT^|Q^r/yoV|x(qSL2Z=y;>r(JIq0|>M&1wwV#`9C' );
define( 'AUTH_SALT',        '{lk0C$_9^_c70Eu`{*{f@cyZ<?cIFb1MGK6h a??sMt1z$U!g0UdOl-TWc?[eGQ7' );
define( 'SECURE_AUTH_SALT', 'bu*Y~I=ss_Mjwm=Hav{}N6NGV^w$U8/*Ub1V4UhJN.BQf*E!OOPVNX)d0U.l|0J<' );
define( 'LOGGED_IN_SALT',   '%Ic!cK7lsgBKofCik|P!i6cKR}^f(jSF]o$jh`O76N@wdQ6<4kO#eBmA/q]*I;h_' );
define( 'NONCE_SALT',       'a2o1iH=)wX-=V$$PZ$<T^Zy^eO,iHREa/t5ORIU~>~WvZO[pvYzBa[^o`ejskZ#h' );

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
