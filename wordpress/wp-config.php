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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'badminton_vlaanderen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         ';3(boz[$7wxN!&5%Nh,rbRC}f$.7Wuo`wfEC)`!a*r$9tM-#ZR)=-njyqeed!L+_' );
define( 'SECURE_AUTH_KEY',  'e+V?j/YC8|gh]mJL6g2r~4_zDB[.K8$_K3NZug&$Q4}$B!Ln%JO8k$3-GB(gvi0C' );
define( 'LOGGED_IN_KEY',    'W-%+},L jiq1DVSo5@6Y[&^Lr>w]0N-E5BJ5YH0|Wv9a<){!]!Tl<7Nb070s~/_j' );
define( 'NONCE_KEY',        '}g6n{^OnedJa3o5yUElHkcVYM~mV>l_8`3C;;R$)L>KU} r2#ABDrAcg>fWJXprK' );
define( 'AUTH_SALT',        '2=BFqDj98eZa~|->{i0.6Kvj+G~B%J5s4nzK`Igk?6u+)?CSp%1_i7i5~]a@fkQ-' );
define( 'SECURE_AUTH_SALT', '0]j?@7.o;%zuv)-u8FzC(6o N865{ 4dY:n17u$:q7 o`XNb,0iYLh+rj#{C :]{' );
define( 'LOGGED_IN_SALT',   '1I;5Cz[vs$`hH8: cA;cqtMG %5j:-J1)2x_WWjx=Sg8 *KvkOV3HW,0^`j }GZF' );
define( 'NONCE_SALT',       '*dTV5VET[ WfHS0h@U=1-fqJ_m6Qo6Lz-XUL*B0gH_z~CwK9W6rA43HUFcBhX@59' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
