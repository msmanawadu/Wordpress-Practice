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
define( 'DB_NAME', 'sandbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8-zwPi~:jJ[2HS?E_8BgO,#Cs&ezj%]SxnzL[uG9YG#$B+0$t;!OWyx)_5PKPJk:' );
define( 'SECURE_AUTH_KEY',  'v)rq@zyKTSUbTj?69tvdg>Ue,AxnbtffA{e/z{TbR-Esri_1#{<LTwb=hbVB$jRt' );
define( 'LOGGED_IN_KEY',    '{w23g+$S!t:YY4e#ltl9+5{Gb9-e]K<~8(A-Ns5Vl.uJ<mkS.vY5hn&A,]PQPD!u' );
define( 'NONCE_KEY',        'L9+#J`ix(w<AK}ttA9S2j|Us-A=Kg};m$f74,1u}#+t9ea4JM0h#$>N/}A$!cMV<' );
define( 'AUTH_SALT',        '9pbmBg6jE71o:2IG- FnWKtX5v0ciZi{y~qt|!Z`0{ANs/=x6T-?Y@14<uHwURx8' );
define( 'SECURE_AUTH_SALT', 'vY`Hr,uqEvYzK|@?p#oCl,W5.EkamKjuOq4V!(r?Vfh,P8)ua;l;&FnMJ|B~YIxa' );
define( 'LOGGED_IN_SALT',   '7^a.T20.%ME0 M0)PRRMs2>D)%Vtk_AkJ{1$2tHK1mIy*;yc9Jy84ucKi-E,Hn[u' );
define( 'NONCE_SALT',       'Gyd1fi1;GEq,R:(V<SpV#de$7mRgm5 Sks}jAHT[*eXU=g* &`<^5[*sI_UVSxI9' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
