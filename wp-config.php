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
define( 'DB_NAME', 'psphotography' );

/** Database username */
define( 'DB_USER', 'pierre' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'CtR[R|P;i0vqy^8S;y6Tn0JdJ>:f;XJ@99 &5ep/<{O4nAn^IvOHET`}9j?mW h,' );
define( 'SECURE_AUTH_KEY',  ',P9v6o1@hcQYg.>As(QL:X2>Fe=db5x8VRp6.#p/j@8TiKV/kHX>{]X8F 8Qxi5c' );
define( 'LOGGED_IN_KEY',    '~C?Y4jq10b_a>`&R=y??H?]`PuduarB4C2Jbqq~avH@Y/w.Rl`Q&<Z#%NH>+7ZQG' );
define( 'NONCE_KEY',        '>HO:HTrQ1Kl8qjRorb+s=fl!tXcSAq}[N0rydIQVP(JD&putdzFld[+**;2(xY,f' );
define( 'AUTH_SALT',        '!XWHp;2oY7ac,Ax^B+?(W,bhF=p,ryoxGa,Yr@:q+~3A@cd0gZIdb7SNpwJ-fTTn' );
define( 'SECURE_AUTH_SALT', '74w;4:#lw m*y]y]DY==T4p~=NxEov{}]OU-MzEZ$`(+,H[GIkB CbxT%iWeTD<-' );
define( 'LOGGED_IN_SALT',   '_)0vp2lKK6$VW8,#E]6OZ{SJ^?GYkWg./F?k3!,lg/T63se-hK%@A^e25GzP`g=t' );
define( 'NONCE_SALT',       '8fM|re#A.)/&p{X]uzVVFI #_wZhBY.vlI_E,7}y*,3:~LRz&L8F>gwC{5$y`THV' );

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
