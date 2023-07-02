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
define( 'DB_NAME', 'monportfolio' );

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
define( 'AUTH_KEY',         'u[ll/|F|oo8w=SGi3[{er,D[Zx_?9JyIqy=|}*,b+&Lcb>DOK1= OcIQ,.w=^JD:' );
define( 'SECURE_AUTH_KEY',  'M*VRf#YH!}bbDy^[M6Tp-o$R<)U>b+2+xmat.+TVf--50D:+%YSX(#W2mZmcu[<?' );
define( 'LOGGED_IN_KEY',    '!1Z8x.Lo&16h4#C>%3h5PpGQ;*)`aGprc[b3I%}qG}M%#M7vT[  zM:AI*xm9 t7' );
define( 'NONCE_KEY',        'zAw2j72[DjPrgrC^UlJ`Dy`R&XtTzGKgp7.`0@Mf3EtuQ+Z>uBinAey a&!0-nOp' );
define( 'AUTH_SALT',        '5Th2RpW=6l`7w%>we*MnB>:s]=58<8I1Yw.S]uQWW>q-F]#,%2qM-J@j]ZG{J>eb' );
define( 'SECURE_AUTH_SALT', '!gcuQs^htNwtmQ#`&+]K(>{T`|&$.qc3+w.#vi0>UNao`cyQi5a~F^*^xa$)Sx:g' );
define( 'LOGGED_IN_SALT',   ']E->~}Z!5VSFxqzKX}#D:~6!Nq^%ieRGyAHmxq^o<KUUi7g&62,mW4./d2xx%$W~' );
define( 'NONCE_SALT',       'xex0,@}Y+t(d*I3EfoG ^VsB,X{1A*od;q3c#~HjRLf=U*w:7YI:z{cqyM=76X_b' );

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
