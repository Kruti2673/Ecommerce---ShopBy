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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '8zoq4vj%s(n@mSxpVt#d%<d=`G{tJM(SuZr=>q%)bXGz&^_K^[zq~9IjQTZ3xzPR' );
define( 'SECURE_AUTH_KEY',  '|9M~XR8j~N27h$(05<O5SELH%}`Rn-vXOqA!S-#[D[3T<[ANcv]Et%/J}Cg}dmV>' );
define( 'LOGGED_IN_KEY',    'e+.`rL8;<We:N]%qFyx${p!V@@VVK&zn)!Q4^Q0ThZNi+>O&d+ CB[K|ep}0az,]' );
define( 'NONCE_KEY',        '91{0YsNp(MKEb5~}yA&0/#`$+qW`<N-3S,zq+A=3V1AH4b;?4dfiY]wr>tvEh2Um' );
define( 'AUTH_SALT',        '=(]:QZi5%K p]z9ud1X)ebu<_g~B;WINK@i>kmsi.Fdexz !dRHo|k`l>A|qPIy8' );
define( 'SECURE_AUTH_SALT', 'hjz$yT.,sm9#5Wt|ld*~qc~&$GI,KED05pt_}ugxHd4f?;;L]_2IY(G5W 5G)-XS' );
define( 'LOGGED_IN_SALT',   'iFj)t]ez[Ib2qJ2:AgR$YibNnK3Cdw+8GKx~Yx~8!ny@c_4YHFBtBY59;Ru1u[T$' );
define( 'NONCE_SALT',       'g46@cz31*w_dt8CIKH)G@V/XNQ;|ywnyvmbhTnsI;>S&.h)@^N+D%-l}=IKlu@,%' );

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
