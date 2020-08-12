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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'Aj`]j59?VJ[[uN(Wy,D^_hxY7{$$_C~SLfPC?mI_.)(5SRm8hX%Y?~B>]jjS08qQ' );

define( 'SECURE_AUTH_KEY',  'f<3*bea{VDR_ez/ELs`-Dlo0CZzqaDcS@Aox?I>iTt$@hU-=;g5sfrcA&.@s(gS1' );

define( 'LOGGED_IN_KEY',    '*;/Q?%,p10=93WFCzUa }cExBpU>J@}K-_k|NlfM]h}aU<xh<dEs$Tk]YI^&+aU8' );

define( 'NONCE_KEY',        'IaOMYE=R0@U=z.7OG{G5h%;aFBZrTCM9v@k[%]8(5]dI}i:>TlG<*&7%%lNx91wt' );

define( 'AUTH_SALT',        'b>n(^Vu4wBh@c.fruI^rkfrLDVJ;Ni,S8goeK0`];`Cj95r3-S.8 AMzX*#PXJK$' );

define( 'SECURE_AUTH_SALT', 'DFcR?Xu] w(L8&JyIpw5LpNc,W[! a^]x!A,Uv6phs?YU5#S5H3db)fAYDw?)Ggh' );

define( 'LOGGED_IN_SALT',   'pc[B>^dONiYY::lx(^<IQ_gP?2^in6Xo`yW$N<U$db%q]a=LuJ2+|pR*]cjuvg^h' );

define( 'NONCE_SALT',       '${=VC;G{kW3[5aIwD#y,E-PhYj;dY47b, {[u]QRa&[:f0ccn9bhjG/5e>iy]H#w' );


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

