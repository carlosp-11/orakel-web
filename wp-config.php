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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ')<2)I9?t<g%SRB/u0ZAWK^JgIO}rS[|rdRwm;YmeBd*tIu8IWYG9?Y0d-(OS]C:-' );
define( 'SECURE_AUTH_KEY',   '3j:EnP{)H)]KNzRm}KKqG}NMyPva:OGX4E58z2jsmeTWQGt.`%JnF2D<or~}@,%C' );
define( 'LOGGED_IN_KEY',     'qx(#zO_}gRN_^s9=8EZ$4K*%<l$EZ Kl~:E f92@F5*JVonpzL<=lh-/|tEDb$/_' );
define( 'NONCE_KEY',         '%LPJD1G;?,XGX:HlZnE!().3(990:7w2r=)|lRRm#6t4ejkW.>_{.[+Du!_lmLo>' );
define( 'AUTH_SALT',         'OH3yN*ejcuCNsFsah{Y5c&!4f nq9r?N3gi@bKh)Ox9@1zc&s/697Ho&vV6#nlr+' );
define( 'SECURE_AUTH_SALT',  '^qH;4/u`Ck4qu|TD56E!)~kYfHHI)go[QZ-uLIPhE>/9K9xQbs iKtgWbb,mI5;,' );
define( 'LOGGED_IN_SALT',    'k`&~1RW56jlJ`S:ryKm0qNL9om!oC?YzDj;FAv[E)2En57&vWcIPcN,diVB69.-T' );
define( 'NONCE_SALT',        'O#1#aY|(yqpIZaVl#pdY<DUjr2,R=io)66|~^9bs,9:kyZtFP_|O$|v,nE&U(l2N' );
define( 'WP_CACHE_KEY_SALT', '6GUO^9QB1JwCEH*D%=/(fZS~d9iWqY*<45$h#T0E@&cIf=mGxFb lSy2hJoH4i-x' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
