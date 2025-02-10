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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'db' );

/** Database password */
define( 'DB_PASSWORD', 'db' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          'TN|T0u$oCbX|Dk[VFW+;Xo1pcq6o)^6)kI!TfUT2~BX=f87/6ZZ|M(lDpgr+6Vd;' );
define( 'SECURE_AUTH_KEY',   'X!7XlY9!8P9U(Q`52t^$9R9Yp&WR|)eK_w`_xH2b$A#eH?c1|c7q|IR=1zud;T&I' );
define( 'LOGGED_IN_KEY',     '&G$Nm]uAMeLmI{PF]7$*Nw -SbkIvML9[{(pPrE$JnBVWzoz.+DsfH2,z+FgK7|3' );
define( 'NONCE_KEY',         'o$c`xU:{2lV`/b~AE**NiY0+`(~`UC)4<ei0=)h!{7b>!?Ho%5yw.DL[QBlG+wSm' );
define( 'AUTH_SALT',         'z=Tr7fFkXDQO-OiZ0.@*_0R/echGEpDaRCq8z_P,<IUJd1MtFP+)/62~JOZ>YX]t' );
define( 'SECURE_AUTH_SALT',  '`$|-FT?>mKm;3gx(9W2:(tSSPLf,Y(k,.m6aPyBEg:QcUD<1q{UcXlsNUBE;U-t{' );
define( 'LOGGED_IN_SALT',    'X%:y!,v>uYW5Af3Ns(Wzf{F@&#-^1kC)B@o;2*I,xn$Hi.,H08z}$66Gdp16Dosw' );
define( 'NONCE_SALT',        '[I0@luwzmOi3.qHF{<L3@DaCy-i }?+F ?&)ye X%|1TJKNRb:==M0`ybO5{KZK9' );
define( 'WP_CACHE_KEY_SALT', '5WLGN3]Q:lB(-J*D?iH9/FpEyJDC15kJ;1{&+=$@}}%.R9dWM`yb%{zC,lh:)]](' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
