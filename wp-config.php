<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'ragaco44_wp732' );

/** MySQL database username */
define( 'DB_USER', 'ragaco44_wp732' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S6T-98p0(U' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'oepelamrs7vvcxvqyslnf2c4sp1jniolo5e0wa5gmzswcrxw8amzpuh3n5aq0dit' );
define( 'SECURE_AUTH_KEY',  'pgftgai8p6mnoffpoorfugz0x6he7gi4wku9pbzri5aym9cnchrjxbop4ohvhsiy' );
define( 'LOGGED_IN_KEY',    'dlgzrjyzhiruf7qmkv5jgze4jhxrbmdtjnhrm2k5owozugfv0z8edpqypvsuhwvn' );
define( 'NONCE_KEY',        'ci8rji3k5cmeha7iii8akminztdw16nszphgvzlxqlncsqtu9yue65kmje2dslmn' );
define( 'AUTH_SALT',        'e7xsj1uj6r7h0xwe3nc5ppfeklnhfu7o7xx4opf3vygjykyitgf6gx7pv02kosvx' );
define( 'SECURE_AUTH_SALT', 'vrvshfxdcntywonlnbqxhbihkc1vf6cofre3fomurtx9pjyzgzgwxegdi26kbjys' );
define( 'LOGGED_IN_SALT',   '758u8mrg6qkp0q7pqeeyfeu2xybxex4pimwp9t8bhvnpajjos4suigozq6ilpx8v' );
define( 'NONCE_SALT',       'fsicrz08w1auqneu6ohs0zka9nu665zkvk0dym5r0rl6zedf287hb2or9gf0pk4r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1k_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);