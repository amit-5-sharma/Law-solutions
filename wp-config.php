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
define( 'DB_NAME', 'law-solutions' );

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
define( 'AUTH_KEY',         '1$O#i0V7yoQ9G =c=C!EBXm6Yo *IsT7%ms>CsJ9e&M}k_&_Vpk<J/8RcA-aPMbL' );
define( 'SECURE_AUTH_KEY',  '{Lcq^R#F`uc6WuvlzIWgVym6CyqD. bj~%2+3()L3XNRP/V#@B}Uetee %%}HAq]' );
define( 'LOGGED_IN_KEY',    ',IQOVqJ}Rz^]**F<9/$KFSVj/8.@&)/At+:BV}Ki{I1~vb.Wf0Aw:lX_fABs0w/S' );
define( 'NONCE_KEY',        'Fx>p<A%!=~<n&B$0QX0ZIR=7TVj6d*=kzkU )%j91gm>xkT$g6_us^BG0ZT&![h@' );
define( 'AUTH_SALT',        'a#Lz=_EnZ,`ool8K<<V>qw7y7<HHCeR<o3RQ! >[DcTzKLA}%*4=l`Si`*8>[jwF' );
define( 'SECURE_AUTH_SALT', '(^0 ~ptFyd6bb`y [opVe|UwCm7P6xZ=A%mStFu@uX~oxw!x9aMnm8e.9}-F@ec=' );
define( 'LOGGED_IN_SALT',   'lwMAN[%qUWlFhj88Y+t;<^HAMaaptGN<jA4!jn-JyMj`O_?XvKMDW[oKLg))W&<}' );
define( 'NONCE_SALT',       'DwUcoJ^)$k;9d2HTSl5C//O~3},CcjJ2#ZvLF>-^/R5n*W=_tODx&].:rk$MrAkz' );

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
