<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'jaydigital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ZNk#aPCu|.Mu#Fe{+A7HEMf-n3C9avyKe@K(_d_o.8|$wzYT/BSn cYBmaXr#IBh' );
define( 'SECURE_AUTH_KEY',  'da56O`^+yq:FlJVt):-,MCL=Ylsfz xS)_IOF;Y,U#^_C4mnRhX3R*|PUAR/oPKW' );
define( 'LOGGED_IN_KEY',    '8:FlK =qDJ6hZ0ab<Fvo>DkuM?>K&Ps<?o` >Xk +5M?Ne(R2Pqf&gfw&k*QJ_7L' );
define( 'NONCE_KEY',        'e-E3WnbFV8Fsdr&Jqz{45e|Gk6$}A)F/Iw) m82=p0xG@WSZ$eBVa6jFC<J?JZ,s' );
define( 'AUTH_SALT',        'hY$1_u>0Y>nvqx6ej+O(;JD/*M[r<$zT#8M=k-g$&[3_sh-EVqlxJ+klCe?27cLp' );
define( 'SECURE_AUTH_SALT', 'Lk-f-3vO_?s[WaY^)vRTk {p11PZ4o4o}v6t6tp6GPzlz3to#hF(o@CV7.(HoSRh' );
define( 'LOGGED_IN_SALT',   '`8V-*z:ZQ(}}NmMx3+S5XIVe>Qt._Fq}BQSc{E ODC`7R]QBf#rV8zy{sm;]IvC9' );
define( 'NONCE_SALT',       '`aa1kd~GMM./j>+{{DS~GAGM(^qB&|NfG;<5zKl!UO$^?{@f?A*.s]^|ITMCua-a' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
