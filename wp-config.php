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
define( 'DB_NAME', 'wp_chocolate' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'BraZP8P/]*zm(NemN(+xMb~q7fNG(G/33M)-Qf%6Ga_o9O2MVIn$i$uO>3zp0r$h' );
define( 'SECURE_AUTH_KEY',  'k<9lkfs+:HXf_:>SvU3QU)`Y;GX`1Qf,;P7j[O>Kb&5(K$n9H*DS$$!#[]qUhpNC' );
define( 'LOGGED_IN_KEY',    '@nu=OSq<`QtV-:p3XW$I(&FA^i1S%3J>e3 &gWe$U5|.lpao@4Z8dHN{$7Eg=rEd' );
define( 'NONCE_KEY',        'g:I3}!6sc4 @Rrf2B4H$0i)HnxY:w,xA[?z@so?=3 o8mQ<w4796|Ea<DM#bEp&T' );
define( 'AUTH_SALT',        '5Q`Eu%*/8`UP,wl&(5~N0[d4i4(Im6%#iMsbiaa?0YDXV-]wkyYJmYk<AEa6]$C_' );
define( 'SECURE_AUTH_SALT', '|pA~+}S+S]o7Ws&asMDpKGHX`/VCKPhmHfibd~!}Qi1kdm[qx)d>]CDt <!qLk7e' );
define( 'LOGGED_IN_SALT',   ':^Tb.O=h@Cwbjh%2g)_<~~2qagzY,x.9Jxr11[38j13Q-2dqS9fVl9Ps^navxK_D' );
define( 'NONCE_SALT',       '{`$|~.u>p.ig iYz+WKuiCqXv`VRWx~pxXGi`nG#Ny*{O&=;?||hBGu_z(6z)+39' );

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
define( 'WP_DEBUG', true );
define( 'FS_METHOD', 'direct' );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
