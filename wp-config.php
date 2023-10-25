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
define( 'DB_NAME', 'tcd_database' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '@#$admin123!' );

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
define( 'AUTH_KEY',         '[NeV?a;%=2iK$PXjt0,}NJ|I[l9ST.h0j*z%6xz{pGak>|#CX?selWa`-kF`S[%W' );
define( 'SECURE_AUTH_KEY',  ')Hv:6+94YwryZ5P_r{YPd:H(&=tjrWRZ8>Lz,:oFN%)OE[$5h0^S-oUYVUG},#z3' );
define( 'LOGGED_IN_KEY',    'k+(}hG1~hS0Xd#pQ 3.Ddx>,2lhq]5Ne-O9yY3hD#mwP|;aEdA]^|7jf]r#y_-K1' );
define( 'NONCE_KEY',        'WZ}@;8`TV{T2|}a8@&IlAY+gaZF*]@xFAABI>GQLH)C5>TA7yJX8hS0eDaQM_Pe-' );
define( 'AUTH_SALT',        '/ee,,f@Y*v5^C6FU7//^Ml:,[#^k.RuX@.ixp+U_R!)_aSHN.h;UB}7#-.t9=h7L' );
define( 'SECURE_AUTH_SALT', ',`)xZB/U;@SG_C}8{`5/EIk/symng*EY]xYr^;;f&eHo_7H-Gk-Sl,~|^)]*pVFI' );
define( 'LOGGED_IN_SALT',   'P#i1NcCH%se*{|0{0c,%X=FJe@Aa#|:19|6?ljjvF.8PY!i!4H{; nGcpPNM+#9~' );
define( 'NONCE_SALT',       '(@ 8G*=5.%IIPSXR^z`q,(Tn7mbT]Z#4_rp+F~iJ!_AOwGCCn#5x*ilzPOQ{6/t.' );

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
