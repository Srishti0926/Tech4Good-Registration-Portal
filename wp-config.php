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
define( 'DB_NAME', 'tech4goodvesac_tech' );

/** Database username */
define( 'DB_USER', 'tech4goodvesac_vesac22' );

/** Database password */
define( 'DB_PASSWORD', 'vesittech@2022' );

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
define( 'AUTH_KEY',         'dUq[SN*E]=3r}ZuIg,2;~pmV%dOzU7E(#XsSr|d_RKjZQx9BhaVS!_p|}T}.~~u-' );
define( 'SECURE_AUTH_KEY',  '>^G2Qq`inH<j=%x`5x;UNGv=~Z{Ynfs_q(]A9]d&i_-p|Qvi@t;)9sO~C9,{z!4V' );
define( 'LOGGED_IN_KEY',    '<0hZ3<sWyg.giAS,&)cgOLP.Px-X(O]M$y}K-QivR-PGj5/VxoiCP4fZgo9,0I87' );
define( 'NONCE_KEY',        '^3C@KgPEyiX[%ih4gc@#W~VYNP*PkO3Y4)JGR.201[x)5L;ud[Mibp;t{ukl&V)3' );
define( 'AUTH_SALT',        'GUx[c`C<f{p?AZgU<<{@-5HRPb4sjUpdg6O`0F $u`i!:Yedg(dl,F4`azXapDmd' );
define( 'SECURE_AUTH_SALT', ']-#tgi[.wdX0I)^dj(W6 i*/SLR:do:t{R5{ac//j0`ElRN4GXL?Ruwwb[Q^^9{C' );
define( 'LOGGED_IN_SALT',   '0|DD1p-n2>J]<!}x8;t,_5G*E%2_genpf-Wy4c~x)WXJqR6;wPB^tx+uwSj4,Ac+' );
define( 'NONCE_SALT',       '=zM$wsDt@S&RNlYVN(`^nEq[!yED8[(XPr=)bf0$yl_HX5vff8tiOKEduu[5q262' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tg';

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
