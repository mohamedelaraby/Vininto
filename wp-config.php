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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vininto' );

/** MySQL database username */
define( 'DB_USER', 'martin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'r_[0]Z1[$t*6TVpkz%$a.D$=P9Vv1$/^PA6iRr!v|}d6} J ueshTW{Su3Q=pX$t' );
define( 'SECURE_AUTH_KEY',  'F^=J6uyL~yKK|i~OSSlOb5q49v}9^DTs]GB#ag26{3`-UJl_S:iOQy@mD`lOWIz0' );
define( 'LOGGED_IN_KEY',    'W_G`t5p?aijlI:&`/P.sWq)]zSP7c  xlcqP}T0r7f;ibwE9A+m&dKvp3RybdI,p' );
define( 'NONCE_KEY',        'h/O(oLybi{_h4n[M}sXEGHhV/.2IDJDMF~$N$h*V9H!t;%8xd$h!?#VHsT3Q&Zgr' );
define( 'AUTH_SALT',        'pS{gL1CWi}R1Gy=%!an`3/wszi.vK;D[ZQx */U$B6Ca(.9 L;7jP5`(T@^ed`zZ' );
define( 'SECURE_AUTH_SALT', '2t]G^BW:qzIDJ#iLS,zit*uWW@0}@0~Ir-k9N#kXgz7K6vLWcnoM.k{>YCzu?.r=' );
define( 'LOGGED_IN_SALT',   '$A@UQi@CT#1f^$nR%gx6T.+pB]tNwO5+*(1SFu/!Su9loPp;M/a}hihfo733g6<?' );
define( 'NONCE_SALT',       ':u9_*8nOz;-N9[c-lXQ[)ijn< 6|YyY}!]}*n#o-DS@c6itk.x3#[Ttn)?rz?,sM' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG',  true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
