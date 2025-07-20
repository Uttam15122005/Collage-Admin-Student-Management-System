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
define( 'AUTH_KEY',          'wF]o.QroH.b_2=UOqY)HA({!lI.=gn.~e[EZP$ef,tmY,EYyI}:1J/3=T`5tLQ/O' );
define( 'SECURE_AUTH_KEY',   'b0WSTLfolTv3;RqoRa:7#di} Bs`FRer.oYk;(dNt ?c}W?-O[qtx/Ajq/cUW.cx' );
define( 'LOGGED_IN_KEY',     'i$mfl/`>,Duf,(;j-1=j~G1+gq&rZ-;Lk-I5yl`uvz_H?={a{*)+0_ /kirn%j-L' );
define( 'NONCE_KEY',         'Ox6)dW$8gda_KX,dnRH)vf;gJhu{Y)g<hrQ{*vM=a,&h7oir%d@Z4fV?~Tm(`-.U' );
define( 'AUTH_SALT',         '$z@dd3!K}XQ,>0O6>4)d9i7bnN!*U?L6s9(6D{R1#-wf?)FVJE%BLM<9/0)DQ7X ' );
define( 'SECURE_AUTH_SALT',  'FJCwY5j88p7nA%JVi3M+G8NUy<mhq6{j4tH?W} b&yJS5Yuy@&>OV]E_*E/yZ?Ve' );
define( 'LOGGED_IN_SALT',    '|,{Ls.,g0;v|ZU22B0heRKu0q.[+i@-5EkVr&(*!_+oy>ZcKn^w)~#N|F;hN{|6,' );
define( 'NONCE_SALT',        'FcxMC~cOf+qn>zQD6#`!?#E;k=ma7t&E*Iy,72LN4qV%+@sZj{IWT8+5>8uLD0^)' );
define( 'WP_CACHE_KEY_SALT', 'w8fkO>{}I|U)YR!kKNUL##AM[$LJZ;^E2jcMx3~`xK`|{[xHy}9ZZ;7(nQo2RwRE' );


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
