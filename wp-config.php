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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Solacebox' );

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
define( 'AUTH_KEY',         '|.o]&B*DsI#-2hEx0D-_}Etb^:)H~rQbp^=@T~<,>C$(aAe4WOiiQb(gTg=|I9{l' );
define( 'SECURE_AUTH_KEY',  '$dV5{PF %J`fJ,1k(a*uISJG<QY9WiftR..yq]b,dlB9rH/t6z+|!Lt7BZiArHrl' );
define( 'LOGGED_IN_KEY',    'a7rd9.804RM7X^72`OT9B:bWPtlxE3pT+cGA. 9P]U);~m?7HsFANeA9efJH?(%:' );
define( 'NONCE_KEY',        'tTXfRc0%Q!/N(x~(ypy[~gGe.Ej/#UC=5T]I6 ^#ONJi^D&iZ?*:5j{-rS!4uH1w' );
define( 'AUTH_SALT',        'l{iL~I3`34[6%~r37ey}+=qGRZC%Y=|{S)%kDW-nF@D-pZn%[B,zEA2uw:G ktc[' );
define( 'SECURE_AUTH_SALT', ')f<JEsFn/n_9bc}mV7:<DG-yGac;-*?=03t/H[U+{=6EJ1][wjL!;g0MF&bMqYbU' );
define( 'LOGGED_IN_SALT',   '~qgp&*g8o+XBn,]}5XB|(XN:Ct3o)J%lL09.{ig>cf)-&X>QUd2!*WCN1nX-NHz7' );
define( 'NONCE_SALT',       'cB<}am5@0D<BjdID)_nZ$|uRYA/l8D>R66/trC&7UJ,7GW4=dIOPa3T8xkmK~]H$' );

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
