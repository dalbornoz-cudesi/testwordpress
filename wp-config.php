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
define( 'DB_NAME', 'testwordpress_bd' );

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
define( 'AUTH_KEY',         '[O,z$n|j4P!S^bL ;e]1lzRAjwX.m&E;8g^nKAoK^_`DwB9R J,y-;8J8b#NqF)S' );
define( 'SECURE_AUTH_KEY',  'J@gxsMC5BSv&*W=Lx<1<lfOkB,NyN!PlgMR!~gRYGZXGcaH9g>ell7 WO#Q3{c%X' );
define( 'LOGGED_IN_KEY',    'g^;-1Sz1LqMmh ,rnW]:7$e|2R+aB?rthDXtZH,j6GONrbh-FkcV|aj=)2^L{_I8' );
define( 'NONCE_KEY',        '6uA)(qn/9=u86Gkeu2`Jf.[3_|97AG]PB1];?fwZnZ$|;]dJ 5yXr}26UQ-0D1L0' );
define( 'AUTH_SALT',        'rNLI%i[PtwO[Et[RmB h G]qhaK)>JW0`>X:Xx&OQb%t6(0[sqI,^ETs`%C Xw~8' );
define( 'SECURE_AUTH_SALT', 'Q O;Hjrxs*5vqiN0RQP}CmXQen~r:t9)L_s2cI[:j9!~Vq VMs$d5X8M}O{$&GFY' );
define( 'LOGGED_IN_SALT',   'z%^y$dUH=+-Y5aPMr7TsR/Fp9kmB a$SI=/[#N Z.U/@am}w*x):Z=?fi,8[TGI:' );
define( 'NONCE_SALT',       '197QugaZV0Y=VXxY/lxS9qHYyj-hjaI`.#}:~-74.<lh5tZgub7$Z4SnP>[OgR$J' );

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
