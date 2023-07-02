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
define( 'DB_NAME', 'yakuwasi' );

/** Database username */
define( 'DB_USER', 'marioutn' );

/** Database password */
define( 'DB_PASSWORD', 'password-marioutn' );

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
define( 'AUTH_KEY',         'MU`QHl(dLpLZzF}diD<X)^Rj}EIu~C5h^X]Jk4*Q$[r(-? n6fcG#FmXZC3;iA*p' );
define( 'SECURE_AUTH_KEY',  'Gl!2:h86KN14<%I Nz-CY5rBfu`W~0}o}1?.17A<iIZ(0=;{#&tp!@H*Uyq^I4)[' );
define( 'LOGGED_IN_KEY',    'Fb)*DUgcl#,KS@<O4#FSMSCCyk&t>P*|q2}Q~ 6(=[N0-YY <WMa+~wCi;-s[LF7' );
define( 'NONCE_KEY',        'oJSK8M.Y~5uCCt6R %Ur<M0Ggpu5sR4QC+ G;5^Wp/Q8,*A6vEovNQ9LT68jh4X@' );
define( 'AUTH_SALT',        'x8wa41)uM $ 9e8:UvA/IuU/~Dh)OB@&alu4=}kIU4fg)+Di1,c}#::6bR;TeeW$' );
define( 'SECURE_AUTH_SALT', ',(QorcQ5jKFPYTt{ko=~$~T`PlK=r+fH,h5</pLK:Tw!)5BBGvBp-Gs(OL`</aGm' );
define( 'LOGGED_IN_SALT',   '6%Lg18CR?}Tak=~2`?Xha13C+CV)h|.W7c8Dp,q<@L&rvi!Kti3aQ|&>HcYg3@z8' );
define( 'NONCE_SALT',       ' 1iH-eyF6mynoW.j0M<pxM?<w01mRE%OjIj6:~cevEEqBORw7{d(ll!FLsBE(-a4' );

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
