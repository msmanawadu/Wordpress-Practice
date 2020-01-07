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
define( 'DB_NAME', 'mampwp' );

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
define( 'AUTH_KEY',         '4_(|(Srxn&WK+ND_^[~)*Mem)T{=gBeDc`!psCl  gGjnh]UvaQ!]E3&6r3[&C(6' );
define( 'SECURE_AUTH_KEY',  '3%NkNMEkF`Pr,lrPo!0dl *Rn.tiiC4+P/bz9VV*_3kw(8%5dbvubbCs,LmX~!.U' );
define( 'LOGGED_IN_KEY',    '#i<F[Usn[)Dsa.8X|Qn8y80WT0)`p&eE?X1m>!(!Fny[Ofykef]D3 kfuhuEUQ<J' );
define( 'NONCE_KEY',        'SijW Uphj%O#E:)@*w_yP$j(^:}oen&4VctTlpjY]1Cc1=v?xu;Fm.Xbok%U4UC)' );
define( 'AUTH_SALT',        '#k#I?VR}WMOA]Ksk{Du!0 Cs^QY*-!K|F<V@19p=ncH&+?uo]YMXlzUblet0Td-u' );
define( 'SECURE_AUTH_SALT', '_+3[ F*Me}rj@1F}*rB^&0=@*:%py!iZ_&mQ.^KDjrH(ITTY]Dj<p2t>E_7g+%_M' );
define( 'LOGGED_IN_SALT',   '5>-EZn}ZX_lMf_;+ML8YA6m`-T?ZBI#B?O-b)EZce~POPQntOuws%156`q-%Ve.B' );
define( 'NONCE_SALT',       'h?4%(--kxreyaQWN0Qu=Gf^jBdsHI^S,l=<]>a2hq+w@tH|K1Q3Hd}%@i,J)vwa/' );

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
