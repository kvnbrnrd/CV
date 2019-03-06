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
define( 'DB_NAME', 'cv' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'iu&2C<0yta}CrFuwS`S+b%BbP }j^=$BZ7D*btiw,3>L_~O0<~oqW0D)jb$TZrl:' );
define( 'SECURE_AUTH_KEY',  'lc#MnJ;qH Jws|gu$V(+F]Hobei!h9|uDoQ==nwnu$_fc_GhL?J(Cto*{C{C(U|_' );
define( 'LOGGED_IN_KEY',    '|yAK`Yz=>*mJx{ep+yko fDUs^kxVP*o`zmy*yytEXg@(k_*LXNKHe|hI%G*DPkj' );
define( 'NONCE_KEY',        'B(O6du(JtQFYhkxff*{R:$K(Zlzk]/PO]Ji8du}%I- /&(2%X~/~ucDR5PQstv&|' );
define( 'AUTH_SALT',        'FfC9fqZPvvLVJ+<^io3si<?;h+#+!zci_h<JPU99z7TIC30-M^/bT9Im2D1kgtqj' );
define( 'SECURE_AUTH_SALT', '0h~9pu.Q$1(fRhomHdWrrFT$FxLus)9ju4eS:k_lQV,+~[oDf}WA}S`#y}Ta 2>T' );
define( 'LOGGED_IN_SALT',   'GpX7LMjG=8h(]Q-a|{J;w+E%kj7CP([!,5>~yUr>WUs^E$Bf# dVf4VXNx*W=RQ0' );
define( 'NONCE_SALT',       '?w=Ecp,zQTO!nSM/ZP&{&2-zdO%*ZWfqjw:4yE;17rxw9[@S@Rj8roqyH8RmL`oR' );

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
