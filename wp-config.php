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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',         'yc>CO0y4JhL+ePBTkezJUW(r$rBwU`M7K`h<~5^j_;LP6lz`jZ0E{xM(<@U.>7: ' );
define( 'SECURE_AUTH_KEY',  's).@L}8rc2b+dPo{f*m[Ww*O]{Sg>aj 4;i8*Iv.Yt0^nqt`zar.ciGeq+0$q,|t' );
define( 'LOGGED_IN_KEY',    '_hB7s4]M/B~?,1d`$`;T?@6{8X%!1B/aLiT s$7>U$}8~1<NKC-Y(4%qaE+B/ZJ#' );
define( 'NONCE_KEY',        'm>5qsMVsQQKWPlHJqe2K:95ywrrkV6/@20wjbdLia|ic-SX |BkmaW!,o|t^ReN=' );
define( 'AUTH_SALT',        'z{JuZv^*bF_;p-$=?Ekl6ak4v%^Cu%soWNYnA.,$8 30w$KEOcKr&%8$S>ZhXk9P' );
define( 'SECURE_AUTH_SALT', 'tr4z=gO9<M[yd[<tgz,t.7k2H S!BVs/ZzxTsR!]*>{Y?7zDj0j4l]5qk9WL`t#]' );
define( 'LOGGED_IN_SALT',   'klrK3*z],h@4~sT&7$+*$X=BE8AoN*T#Ja,PLsjA4)Fom<~X+k)Hkk+dy&PP3h^e' );
define( 'NONCE_SALT',       'Fu3e,[v.Ent,`xH`W>!1&eGl|4S3/BlC6-0J9<.MgDOlAd#gpj2^68dc,?ItT>1Y' );

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
