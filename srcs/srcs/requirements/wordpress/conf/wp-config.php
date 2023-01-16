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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'houbeid' );

/** Database password */
define( 'DB_PASSWORD', 'hamada' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         'rDvC%?WlVeh$Y#If$_:ry!ZZ-1+`eHIdD| R3[H!#fr^%lS79F{s0eb8`o}Q_hO3' );
define( 'SECURE_AUTH_KEY',  '-A,J581~|&A@|2:6GQ551>!es,0y%pbEv</TKgh NnQ~V:l0]HdVQBdbYYWyO.d^' );
define( 'LOGGED_IN_KEY',    '{2:$hhs`1jvnUkp+Aoy`Hyt:Q8isAznkBv#64>#pHIbpZO45UDEJq9zVKTzWgq>0' );
define( 'NONCE_KEY',        'Z4)aJ`Dilr@.#X#{&Sabcrm{9k$;=TA:NmgLy2u rJs:}49QAx9Uw^^K<4[509-y' );
define( 'AUTH_SALT',        '{UXNMHs{zouU+?y<S1Jx/k%XG36-%8sv~GHAV+kVq_u3LOrlRF>JetOGlZQ/mjc}' );
define( 'SECURE_AUTH_SALT', 'd@H{FG+7t_v`rb(CN X|qX?4~3#(w%Gl1m9{Nn:q7~ n0X^~Hg3z-,]|%. n{nnD' );
define( 'LOGGED_IN_SALT',   '<oT6Blj5%U$)u3TMcoyP:fSEKP`3){+YH9v,d {/e17y4vP{>(t=QPb)SEwXXu66' );
define( 'NONCE_SALT',       'I}V0lvp)W[#>80`<pqH:ahO(V*6Qc-8E_$HNP&al,`nE+r;=!0%w[-CJ1n-Gcl{[' );

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