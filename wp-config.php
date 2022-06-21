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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zakwp' );

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
define( 'AUTH_KEY',         '|IsZUprbedGT_-R5 BSiev_b_}BL$2kl!iX^ah(|/I`)~ UvDXeRqr%1(s&27K2s' );
define( 'SECURE_AUTH_KEY',  '|OE=4XZ&/cG|#-m.v )z*TLzK#xYl58XWtWeNWiZUa=[YPX_)68jPG[Np3xNzz%w' );
define( 'LOGGED_IN_KEY',    'j^ZXnU@Lb=}s0QC/I7$1yA-_qweD/czsG3XHeql_`*fWT-x>~Fh:M 154uX# o|0' );
define( 'NONCE_KEY',        'C5&+-Yt0(0Qi%9Ib;`,eA?t>IfBR[wz[f4Zeg!M&8 fmrV8Ft34EVI4|UPQe@t-1' );
define( 'AUTH_SALT',        '7FR5WAp~<cRjg>U+&zaPib+1,PF6A_[Ebi<.Xnonq8k5.HVf#17_JBScsJ2?SnoE' );
define( 'SECURE_AUTH_SALT', 'V:wgqSoE9I/nW_WdJl9E7}Z `0Bklxu>!&ov+#DX<-4KP@l@97SEz$Ns.^=9p5k1' );
define( 'LOGGED_IN_SALT',   'v0?jWAU6,]4sh&Y5[<-rl.,vt[=X><NxAA8]&/Bnc)cm[Utj|q<h,pfjtK_;$oR7' );
define( 'NONCE_SALT',       '& o7Fer:!{.76kzMK F&$b3ik6dxPA;DleFa Fvy;%wxu%%pU`>ue!ZiW&zF:H}r' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
