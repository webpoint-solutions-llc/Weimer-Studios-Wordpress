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
define( 'DB_NAME', 'mayank' );

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
define( 'AUTH_KEY',         '1jxS? F_/G>.`vC>~38:sL}t|cab<h#$+]H.B4Mk|{{y<v/u3:AiaL@ P}U :gak' );
define( 'SECURE_AUTH_KEY',  'a6a8{WNF[b`<_r+[l$U@]@03i_5,=F-z/Uh-;Nm66>bQM((P2#[T~aew7#sv7I$:' );
define( 'LOGGED_IN_KEY',    '/}ZE%0suF5A@%t 51a*h}u!re&5$9&@A$5?agRxWO[2bUK/:p|W2#r_eJ(Tuq-6x' );
define( 'NONCE_KEY',        '9r8-]qsh+eN*=5/eZ&cL0BrUK*3G^[?mtcE]d+/w(}%OFm[^Iy(xKwz.=<GNYfH1' );
define( 'AUTH_SALT',        ':mnbA rSeZ$7CaL2#=c/HG  S@c^{CXQ4>45:LEp29gw=7|TLL!thWsaLoL,${mv' );
define( 'SECURE_AUTH_SALT', 'd$[|T6^$_T$YE)9P1G9=Rl7M]fx<)9fkH50G(4:Zx>nW33!2hN:|gp=-ybOp`X.}' );
define( 'LOGGED_IN_SALT',   '_Hc:~]}WF5O5TOl%tAy}S`FD1^v.)TYOrtQX$&n!pe@Kwh]l:FV(O<&>U#)9lhB`' );
define( 'NONCE_SALT',       'oh<hD|x;>@T1Or$.VYu_Zr?jWCrq}F g&pSDL},}EYz6BJzl7Nl(]mRd_Z:;=SvJ' );

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
