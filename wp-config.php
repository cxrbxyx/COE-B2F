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
define( 'DB_NAME', 'iker' );

/** Database username */
define( 'DB_USER', 'back2front' );

/** Database password */
define( 'DB_PASSWORD', 'COEback2front' );

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
define( 'AUTH_KEY',         'iS!b)O*.Vp_nfj_[ e {j&@26h6eM?335Qn+h*frQ%7gQH:%au3~RdSfR:w8*;/0' );
define( 'SECURE_AUTH_KEY',  'y?b/fip2k}lgOf4fHq)o[KTCG@!qLD+%E>{7$ZX?%z52$a0yXR|Z+K*?W=P;lyE^' );
define( 'LOGGED_IN_KEY',    'U3;>DNso`TY(]C5#;Tb6>1L%%/rR~YJSRve$_In;eyIKuk9^A6HGmP2Z 6Zs!/<<' );
define( 'NONCE_KEY',        'f8y88@bG:zNYh?9z-B9eNR+w%B:=)p;!o1G8D9%_~/^,(&(MIf+jY]2d7/;ip@ex' );
define( 'AUTH_SALT',        'm0W&q%+V|l<o/7{wn^7VY+f?hsW8BRzQ($&PvM>[0RCORrRe{</RRPV$oUtd@O^U' );
define( 'SECURE_AUTH_SALT', '&7,)2{g/)+O>9wEFZ.|9<dV/8~:[ JrB}cZqpv9q{C$tB.Tr>[FI)NAi_*h_d$1q' );
define( 'LOGGED_IN_SALT',   '5XFx+IE6&XFaiD>J~{e$!%MbSr|`uf`-A%%iU`rgH`c@;K]uhH!JcM JtLa%fXrd' );
define( 'NONCE_SALT',       'TI_UFY&FB=k#GLCr:So;VJ66Zkv3L @Z]X>#zpM_j-*q/gi6wG^}Dd,87%-V<fh{' );

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
