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
define( 'DB_NAME', 'siam' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'Zag8kF3vK7$B3XZNfY-8_ES+q.9`[:v{#o!3;$tcUwtZrEx^KffU+WA!aXT<B&6@' );
define( 'SECURE_AUTH_KEY',  '%o@s5fPgVF=uZgTNs0mVjW+]G]i1;xLk}-^td[+I]TmNE}>>[Q7.+S~#{098iQL|' );
define( 'LOGGED_IN_KEY',    'VzY*rXXcH]$||~0qx6UkU9 <S{RD)|ghJ5hMpFSvIoeeG|iv|%7I`JaY1)d*eb4]' );
define( 'NONCE_KEY',        ':uoykCe(M.55aBu~%uT4|Em7HPKPjfDKy`j6pu4ejrl`|o9ii#>49^K67IHNXS;7' );
define( 'AUTH_SALT',        'mFQOxNcEMZ^g_N*&b3QB~~-^^j3*&}&TH{GQw{<26vX6]@0`z9B$kA%QJa.Ov4;*' );
define( 'SECURE_AUTH_SALT', '2+B:WtnOJ8}|L[k~R@(x!j~fn+9q;tW#xw/%eSUjxbl=n{l4#_d?xO8CuE6)_5QF' );
define( 'LOGGED_IN_SALT',   '44{Z_r/{cXjaU[S@Ig*j+w<*o4N8fv:WSwF=}xY#a0L(1-+0!&YNKo+j7qitw?XL' );
define( 'NONCE_SALT',       '?~i2X(;&W8_;jl_q24zZC| k#:ge`rp=^`G5T>~kP sFHV@h9 w7L&*9Xu8n%o]u' );

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
