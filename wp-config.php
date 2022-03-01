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
define( 'DB_NAME', 'bestwedding' );

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
define( 'AUTH_KEY',         'b.^PkV8<JVKl~Oh>@1^3ZRrCbf:7(RG(J<4AC86LK]&+_nd(g~4,[uNA^$BXlg00' );
define( 'SECURE_AUTH_KEY',  'Np`jBc_mvJ-ruU*Wp@~[/abxR@+|WKd+o^: 1~x7g?Yn1e=d&+MIDN[Dy#K;IL(K' );
define( 'LOGGED_IN_KEY',    'K:N[noQ3veqM_x0]`3qwJrl[^`q|qpg}?pr;K+c}%lw;Xu_D-W1V/ZLF<P^A[Q)D' );
define( 'NONCE_KEY',        '8r@=ZK`Y=Hs]aVKR$l+rCG8-(nW!HD(0ZBAU/!i=7q9O/Y:p;vx_2Gs,Q$BzWW}t' );
define( 'AUTH_SALT',        '*vaAb sM$-Ua}L+)$KZZ#wMY>RNbXUAIyVY(Vn$,p6FW68ook~,$,U6?ssrHI&lB' );
define( 'SECURE_AUTH_SALT', 'D2($EhqS=`A/WzGV]:A{kEg2W2p{]QXn}9W;(kl&&.8S1yA[8W_@[F&z&vf+ZdTm' );
define( 'LOGGED_IN_SALT',   'uRY+kN~8j8YV[DLU6Kb`V%,&gP(=vmEDN,8-4`vJV]mV`n5;l69XPvw)6K^[!#hJ' );
define( 'NONCE_SALT',       '$qFl7grvAV#G*Tja?|h;L^b2[LT!ORa`i/+dDCXV^Kf0vKyR^NmwtK>FS1YSm]h^' );

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
