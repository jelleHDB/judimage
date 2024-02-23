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
define( 'DB_NAME', 'judimage' );

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
define( 'AUTH_KEY',         'tVAe8q+~~hhm;N+ZW2,=NN!:/eXHW[1/m4mE.Sr?nEA:anm84mbntk[Dau$;d@5!' );
define( 'SECURE_AUTH_KEY',  'IyeK%ggl]Lx;1!f[-<SG8/3W$@,SQLPv*m(f[gaX1J{9l9Pp+Xb?Tukpe#Nl1^D?' );
define( 'LOGGED_IN_KEY',    '&->h%;(n}8z|A!zq2,z77juImF=,uXIi<O/RfPUfJ6u2#Osty|=5C_lRRR=DO[?;' );
define( 'NONCE_KEY',        '68M(y)5NCcnXF*H)y:]7npu*AV/)BT> MH:(td&n{kvyaRXO<NDa?Be`NI_s-wxC' );
define( 'AUTH_SALT',        'EW~`X/Tz34!?XbU-qJjLb<L.&8JS>?cDw}5aK<a9JaK&%$]6A@mE0J~Pue%%,:vy' );
define( 'SECURE_AUTH_SALT', '-aL;dL*^Rf}qmY<+Z%^T*nGadC6_+f:^sO09c`2KnT_0R4ncyn06>M#|Qho#Xe]:' );
define( 'LOGGED_IN_SALT',   '0zE(O9*xh(d%BM9ie,uZoR;8.TXcZe-4!I!l{&l>MV!s<9z}]@%OOv*S8Z(J2Mj1' );
define( 'NONCE_SALT',       '?P4k,}MB:c4,UCp}oDr9#g0Iw$R4=@.M8U&fv+e19t^JF(}E]<,bo+4Jk51>JD%9' );

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
