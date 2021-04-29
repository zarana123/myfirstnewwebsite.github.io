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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codeanddesign' );

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
define( 'AUTH_KEY',         '/H&!/yyC}~Hos-$l1c=--=t&(d<Y9J4sE0#^+s<v/FQ_0Ob-^sF1<l2b2fqE?ys0' );
define( 'SECURE_AUTH_KEY',  'W&M71%pZy=FCom+E+IM+iP|8)7df!7G]{dHV$]x*oY{Wtev@[O=lRXLG$MSgBZDi' );
define( 'LOGGED_IN_KEY',    '=M`<!]D>#SI8A!vQ$VOX*1}6T_M#Ds#}z_V@<bk$O:,}ji`wO5y<K#&<h>@>bs4o' );
define( 'NONCE_KEY',        'f02j|2vjz2fyiZPayP17n6UPBh5ljhb_Nf^p7V^g.+rwJ&-;Ln9yTb;%t|DPhsax' );
define( 'AUTH_SALT',        'u&|/@=M<vq0{T$<bR?SH-}x~dUAP*/.+llt=<u4B;q/RKjIz(}t uFz*|cqm.bRN' );
define( 'SECURE_AUTH_SALT', '8l)G!Pd]6xB+GQQ 3#^a0rVs9F3-xYCAvJ46E.:LSLzVNdG|XLmW~[EU#s)&bxd&' );
define( 'LOGGED_IN_SALT',   'm<*pkY9T*e;RSj6Po7s8Ek4t.i-(R@$Ha5pz)P.BV}]b[N.29f;dW;KHTXI<N}L<' );
define( 'NONCE_SALT',       'f_](TYTJx4fN7ZC*ETg)W/Vm1/d:J/-.0J|eMmJLJ(T.}XenD4CnVssyj(>}ROQR' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
