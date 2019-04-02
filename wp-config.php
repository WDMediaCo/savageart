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
define( 'DB_NAME', 'savageart_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'lX@C{enO~9/Re~x-13(410j,/9!=mj^17SF&$].%GN%NaZF<XHvc4)F& L*<&/~{' );
define( 'SECURE_AUTH_KEY',  '0qcu9y<+ c>2xlrzi5[@F~h]8$13AIY_er_<@Q)6oA,c92njU5:~[z]Eb{ZVy/>m' );
define( 'LOGGED_IN_KEY',    ')QnB}(WJV%x+Gr`Nhs$)NETV}RGg:]k+A%c{3rR(VVyvKIBP26*cY-ezVN@#2#JX' );
define( 'NONCE_KEY',        'tnlP95UJPF;|c@zHq(V4o#R:Og fjSS=&NloY.m-l0GbuwT=]HUI$ktzzpx:pn]~' );
define( 'AUTH_SALT',        'YBBav}yP4enDA>UQT+MCVWIX+4W;]|@:otO-2zI;bt$v8}^[yQ:?Z(CR |EcY)%X' );
define( 'SECURE_AUTH_SALT', 'hxFS}^N_i*$W2yG7u&ps1%te[;X3~S;yF{_MSXhb;{G#*ZbEFl=/i-NRm;mwS`-2' );
define( 'LOGGED_IN_SALT',   'w:_]0#.Erk3F83PQ)wkEf7^wB]#tr]}Uj)3an;9lmA~c]lp1yyhrPkH@Bw2mN$^6' );
define( 'NONCE_SALT',       'NsZyMkiH.A8$YB<za u@do>0[1e0Or$]y=F~SH<}vX=MXh)b/5AGM(]W-k$(+`}L' );

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
