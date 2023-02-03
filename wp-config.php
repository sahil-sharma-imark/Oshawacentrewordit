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
define( 'DB_NAME', '5p7.149.mywebsitetransfer.com_1663909583' );

/** Database username */
define( 'DB_USER', 'b3a7151a4d' );

/** Database password */
define( 'DB_PASSWORD', 'ORsrc6hr8m*6' );

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
define( 'AUTH_KEY',         'b%$c$:wCCll#k=^<Z(Q}($>@H+fsY7Ej-v?;X#Q/VPwo_+@rDE;mx[$t1_rZsO-F' );
define( 'SECURE_AUTH_KEY',  '?$j>6PlJw^~>~eY,BV23O.5+*?9).gmQdYEz0$`AkbqlSZ}[j5a~<+g[0Z5)z62&' );
define( 'LOGGED_IN_KEY',    'zm<~lz?Ht-]/V04eqMW8$r?$v):wP`Y|#}#vkefSCCb59SjR19UadKFb.tLbi}6)' );
define( 'NONCE_KEY',        '@BWN8H&b).3q6E*CD|U1Ra4jFu.}LP,q^_-d>641ZH7zjd!<t]2_CrS4}XtkP|>#' );
define( 'AUTH_SALT',        'obsN[N|_=~meOw4=R#@5>$7!|uvnEIr[@;*No*=r2.Hj./y|h;5j@&izL`F`xNlz' );
define( 'SECURE_AUTH_SALT', '5a~f6U)9lF|.{nI`Bf.>f*xaGcaQ,S=y%osT{&up2PDzc.]_SpIG`(+~1?|>1739' );
define( 'LOGGED_IN_SALT',   '6FCYJDgJ~wdFohfEd_J/AmAm62,XYdI=;aKK#LZ<6_r)r8Ib$tnH4C(-]{b[KGhW' );
define( 'NONCE_SALT',       'AUB?r|xNs%JdTJrV9+MSM}{pz22fyE,?I>{:C1R+swuJc]M_{_}W,-%mJn+g:yh<' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
define( 'CONCATENATE_SCRIPTS', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
