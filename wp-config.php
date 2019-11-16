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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'n*T7}q&m.,,EO)W>^Jy$=`anw[,!KXF}WP(`@u:Tf}%v<a$rVr)jp&;rRE1;LaDz' );
define( 'SECURE_AUTH_KEY',  'M@e+3w-`iFGGa-=oQ5A=LkH+^:SNOLQqAt>5Q@k#[ -6;jA&GmBo5B}rln}d+h88' );
define( 'LOGGED_IN_KEY',    '^ZC*:yH7|L7wmQptJL_X; <qV/)r<`9+3`_N&hD1*43Zi)Ed1.u FA M)jd_v>wL' );
define( 'NONCE_KEY',        'B$defu70I@}2lj=M}-Y Ro01WR$5GH76-SlF[v]uhf OY]RV}hE3LZZ*2^})qFE|' );
define( 'AUTH_SALT',        'O+6mjpinbM03VC^KwaimEZ+F$cH]/n*Fw-+APw?zHC!kw&MjMx0o};RW=AyXz/cN' );
define( 'SECURE_AUTH_SALT', '-jb^d?$5t $lzGlm&vY~K))fu*XtAHR?D[ (9tpV$#s~?M|w%g`1Q]+]2`C5z.t}' );
define( 'LOGGED_IN_SALT',   'r3Y!+$|mBF>>Jt_X;-NE44~#;903>w!@RcX_6[<%Oy]<:F+x7*0O!&,CojljvErl' );
define( 'NONCE_SALT',       'G[pd,F4#S.N5To7xg?s?^flL:Aak.fy*}_`3AeTj<Q+x`b4A@T2RwMCm!I/Bo}t^' );

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
