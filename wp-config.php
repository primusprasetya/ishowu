<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bwaclasselementor' );

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
define( 'AUTH_KEY',         ',y$_)h{jZUEM_c],@Ip|=H{>G1Szz*Q[Da7x9< zpFO/:8XvM37M+5+0eCOOIuBZ' );
define( 'SECURE_AUTH_KEY',  ']?c/[``M%Q:S>vE*oqpcaG2tBUjU~_aAn&Jx_x4/x;^;)|Y&Sry6xusIVy-R2.YT' );
define( 'LOGGED_IN_KEY',    ':$C%{4##4|dQvi$uyOQn/?[nUK7>uQ6dR$_,`(SGG{YHJ:!UyA/%g!Knlm0|l cG' );
define( 'NONCE_KEY',        '=dN_hR)g652Djqkm/5mU!UBC{i/F[5xzX:hcOF3A;dveJg`v;<&n:.ZlBzDVLasu' );
define( 'AUTH_SALT',        'I;;Ew7>/o,., ~dT4I1:>NTQ.@M+W1z ``w`-IXb+Yg8vhT_?:z0`{8GS;]?HO/<' );
define( 'SECURE_AUTH_SALT', '6SV? = u@yEwpyF8/S3#[{[it<V|t&{6_IUJ4HMN[uvt0hm A>r2{#W:|^UU !;j' );
define( 'LOGGED_IN_SALT',   'P3?<tlgjF~:q3;s J < em-sZ>q*E=^1uRa9(@d%OH6Z]T{)jVk0|BDWN5LcPzMH' );
define( 'NONCE_SALT',       'mB6)E~U7.J3rX~N#tVWCn4C-J(n68C]%43g0o*giYY_cKK[Ajf:J-1y6<@oSGgIA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
