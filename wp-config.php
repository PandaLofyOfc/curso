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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u751220393_JGC0m' );

/** Database username */
define( 'DB_USER', 'u751220393_FFn1W' );

/** Database password */
define( 'DB_PASSWORD', 'ZC4nyLsWDh' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '`;{;YobljbM5-ga FlYAuC[IncEZ;oE(/0{.+c[P97X{aq;FQFP6ge/ #Kn9Bpwo' );
define( 'SECURE_AUTH_KEY',   '+S>?#E~ mM-9p%]7q,t0DX~HX}ib9==CA|.J Dlp{}mGgp?3-u]]y4dl>:E[}1a*' );
define( 'LOGGED_IN_KEY',     '5IvkJ?y{E>z@Z*hK*P3X 19Wc~Ph*v#>+mQn0B^D@]-av@>vS,Otq+&MYR5=jPx/' );
define( 'NONCE_KEY',         'j_wNOpsk/r;#PxUlVX>D 5KO$=OOV}_0-!:fTI.X<nebN!3M63j1RmTk|7l|]Twu' );
define( 'AUTH_SALT',         'zRccN C!{E8~<J/3#h7K&#J((loh;oKInH|Um+m>ll~{ngh13,Pjd0#*N}_u`C]^' );
define( 'SECURE_AUTH_SALT',  'C.eDroh+TflsbAEh5A|Rbk:uSl#5@;>U3&<mJE]P)ES;xY*KQw(niy.U2(&6K^wQ' );
define( 'LOGGED_IN_SALT',    '{xU5)>..|8FfjF%KSbfMZ9,SHM]UY7@wqXqOQ5[[9~/8wR&AIzAMsIx+d>vZB+0I' );
define( 'NONCE_SALT',        '].`@>?.y2Az@}[6FoX6O5WEiL?u|:mG1;*-:P{-|`jb23 ei*[ e?FsE;yuG;XI+' );
define( 'WP_CACHE_KEY_SALT', '+.NU+azG(L[FabBG|@RCCES8hr^CbHrT=C!i>jA[=xtWay<}~E5X6RhQs81PFUap' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
