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
define( 'DB_NAME', 'db1' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pwd' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_ALLOW_REPAIR', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',q@A+){GCLCbU*c^eW!lj7C81HB4WMMq-O@E*PT@&jk[nAr1{4h?aWYKAWu^5^:+');
define('SECURE_AUTH_KEY',  '-7_HKZpZ<j;0.&,75g[sSDhr_WCA/8A[)Ws ,]/QNfwosM<6{>Z+Pt,+^LrKfowf');
define('LOGGED_IN_KEY',    '+-25MRc>JatY[M6,!DQs`-3+/d{f_xq|E5QO,w+PxaR+`U++t{}+c-SO+4`.Lga.');
define('NONCE_KEY',        '#%Sqk-Q  ;BE)UM>fI0/jxk<1GIxL];BFyx@TJ)ue,mha6XXe&*~$Sm-lqi(2xqm');
define('AUTH_SALT',        ')|iMm,(%6~84-y+ktt,$|NnN==JZFXNZ+lRQxlGPuT ~CS;7F`u=jGM=z2bH^g2A');
define('SECURE_AUTH_SALT', '&-IKp-@7xR1h:{=+bBQBdEsvxH%b?Nja-9:[L`^5ikb_X2-{oi%&.2L%uV_z>g9)');
define('LOGGED_IN_SALT',   'FlMy]7qX%1UWksjB0o}i$3Lz<,{e#bRg3<_{<0m-:o,u#bU)x;p-+P8bRCL>3d`=');
define('NONCE_SALT',       '-J>}#791?%}H~h0z05[~M-`qNVA#>L];OJ%Qjp%m_fIW<mSY14g.9?7^rJ5-$a!y');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
