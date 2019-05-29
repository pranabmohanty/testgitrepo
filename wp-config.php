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
define( 'DB_NAME', 'testwordpress_new' );

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
define( 'AUTH_KEY',         'x@GyT:c|=T_J{<Hjaq(=I>VVVn{VCXh-+z:~E*F_q9`Si-^):>~vW|^JK:wv+=8e' );
define( 'SECURE_AUTH_KEY',  'kVNO!}Ip/K8k:Adq;rC@?3SnB]|_m{fCh&ZIYA4ct)+~(T,,bg7uzC7WP)hR?Z:7' );
define( 'LOGGED_IN_KEY',    'V$cjk9dBIM)nEXrpd5:F(`FI7qo~#3%A|VhfQ;kg|%GHl6_l5[EJJR;yQWOF%BM<' );
define( 'NONCE_KEY',        '?O}rp5Sjc]P8b,_pmr[K*Yys^x$X*pKI2Qzzg=gLb(qw4R}$8QhmVjcwFK0^ T:8' );
define( 'AUTH_SALT',        '|syC$$vt)Q7NTxM8X@0.gdnN;8DIQ@d3p(&z*eW#~Syh<jFEqlamjvoO~z#V7Z!a' );
define( 'SECURE_AUTH_SALT', 'dsm`P`sxG{bn%U_k7S-,NQ._,C:0C;/}ne3#m9qeJFP{`:@wHdwa8/jRb@__R;81' );
define( 'LOGGED_IN_SALT',   'kEe@E?M%-z8B(*%W(3=[sM$28.6^$_ht.>pO#.A{,Ey)P@j_Wcp,N{L`jgqimX3R' );
define( 'NONCE_SALT',       ':7l[A]Q_,2iEn3a#5mpX@R?6kdW]&{b4{C]~b2;5 :Ty.v4[+H<4?^fc10YZQ:U9' );

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
