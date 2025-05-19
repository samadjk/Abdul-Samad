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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'samad_db' );

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
define( 'AUTH_KEY',         ']}0[!/?>_-`E.G>2-(QPL11l8q+cTO0LAFjM5f9_#(KJx<z02yWmp+ww%Pel1HsK' );
define( 'SECURE_AUTH_KEY',  'RA?9Om E ~U7{In}QHbulg+c[|imA-FfOE;;!XhLjKodb!;N=.$8?ytT}$L3Yn?!' );
define( 'LOGGED_IN_KEY',    '!}k|rxwNDU $$!b$A+A! *^Btl*Og`}db1@6nirBg=}zAk~n9.sRNDl1@5<:+RxO' );
define( 'NONCE_KEY',        'X-#a^h@V-~2j: >H-8>%eY-xGP)U$x{B$~sg|4%l6N!qH/zwOqC$sc?7iyTnhI{A' );
define( 'AUTH_SALT',        'zZ91q[$=KWdqq+J9RIp,0Mnn$My?V6D2#xQ`Bz@&91*;Y3Y#<m`0lS_-XDQ{kL^I' );
define( 'SECURE_AUTH_SALT', ' Op~ qiyo(P0(l(uHA_l5-mwPgkPrM5Q<-IK-DW=k-A,_G5gYy,z1d[C&NZ!nCwh' );
define( 'LOGGED_IN_SALT',   'a<`A_ju~6~/BN#Jj2o+ Qa%<`jG2^zdXlLi%12/! ABy]BZm^W]bd7<<&~1(uEGx' );
define( 'NONCE_SALT',       'lTN-!&I>7A;9{u@GCFkh0KF[3*y,END?~J^<,Ykb_duXUNMTjWB[Sksi5BCHCM>x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
