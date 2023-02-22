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
define( 'DB_NAME', 'fietsgerij' );

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
define( 'AUTH_KEY',         '4ZOwz#8~[?IBzmX*txR8aLG7.8R7LrHyc.N)?qdS^wB.1~BZD{L7Und^;$3o%u#k' );
define( 'SECURE_AUTH_KEY',  'A7L&l4m}_~X7HTyb#nvz>4)N<1@]Ezn*EC=;#6zn3C%E89)M32h(38iboznc|QDQ' );
define( 'LOGGED_IN_KEY',    'el:2FhQ5,,]#0A:{gr/!g%RMYT{v}Cy:6*6=rP/WU0IiUm<U43s5ZtTe&>*^)EKr' );
define( 'NONCE_KEY',        ',uVnIV_.)Hhe)*p.P?Hg.wU9,{_CQ2&LRtU|y+IGa}leIscuf114-_yluF4SyAT9' );
define( 'AUTH_SALT',        '==! @S2fZKO=_a0)kn(,KBg$ds|JRHPVg>C?:p *gQP+$& ghd~wSrX.EoOdJZ{C' );
define( 'SECURE_AUTH_SALT', 'i(P?^R@0op,^dl0f]*=AuhKKEBge^Cmyh7&5uoY;suV3;n@aafWm6FF6+P%ilw-6' );
define( 'LOGGED_IN_SALT',   '!>VX7@s-89C+5n2[Ba1l{;)l#[yN=v@?xh8 kU*k0b9/9t_j{!d{<>(N5{HM=U75' );
define( 'NONCE_SALT',       '-U&fJT01B~4Ok]#=LzpXmDhuKHkAdlY@He{}[T4~ a>&#/@%4RnRpWliaJqH,iOa' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
