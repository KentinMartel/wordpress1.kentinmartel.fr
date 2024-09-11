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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'wordpress1' );

/** Database password */
define( 'DB_PASSWORD', 'Prayforwin123?' );

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
define( 'AUTH_KEY',         'NvE $Jz qL}I[H49Fzrw%-2prvS2D|!1wHU8XS]T_-j0q6?.p6PRnS&Lm|C)E(md' );
define( 'SECURE_AUTH_KEY',  'yJ_e>m@;Lc>6zQ(B]@,ykmp2_Olyz@LA^EA)%Y5r`ks;|R6mjaO}4lYq5hS5IrKP' );
define( 'LOGGED_IN_KEY',    'i:->u.E*^ULeZnlPW+W0JVu;3i:1<$8sL0wPF#>^^/weX5` g=m+][Hg2Uj[qnAU' );
define( 'NONCE_KEY',        'EC4*5lxA,.+Y.~nd%?V/*w3D@OY3FAhBHzwd*8O@_bw=o,:3LP2c{(LB{oP&gJv]' );
define( 'AUTH_SALT',        'pa_5^maf-Fr!ylhZetTx2hb{<J::_m4src1BI0d`[@PD8.XGeI_=lvgW,h[v-qYp' );
define( 'SECURE_AUTH_SALT', 'u~cX3u%gC6ix}7kdc-u;fp7&}2ek]v3fU6^C.iS=BOPifX?WBA$4$C>Xc9M{/nfL' );
define( 'LOGGED_IN_SALT',   'K 5=]ht.>?(((3Aud:hy]2)6SQI%^Y&[@a4[Yv7*pAj,8qR4h-?VLW E#PMj]IOC' );
define( 'NONCE_SALT',       'B$!+D~wLCo.4szA|>j<HQSMOpO^}:6;YU!6L/a|l1]| xRf)Kew$I<pu5jC4s-AS' );

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
