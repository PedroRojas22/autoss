<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MiAutoTuAuto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Uyao8nWU4y9V8KtrPeYATZz2kNWC4jTUj1hV5i0okAztFHtnR4vBcGkOBMo9dmTZ' );
define( 'SECURE_AUTH_KEY',  'UGlgtmVfihsMXmAGEG90BDNzrq5UgIhKVAb8JmAZzNcObKku4ffScCvvLim9i5Xp' );
define( 'LOGGED_IN_KEY',    'Gsdoh82mtqsoLsBATgJjBc4K3JKDNcDhqe8bYMuRI6xSsZ1VFjHDDpQolX0kBzXk' );
define( 'NONCE_KEY',        'kmMZJALUIVjyQFd2Uco0kj87C8kv1oXJ4pJFYosoNw8nJG04xNOhg9nw73E4c53D' );
define( 'AUTH_SALT',        'afo1zVAIhnxhxbdcDAncWEIAdkARVNhwavzglEAER6OivYxU2oOMl44MkIRxUTrI' );
define( 'SECURE_AUTH_SALT', 'sKN1ZkcsA1fm2Lu7FF8rAfy49rLjc4Xs5nf5f4pBZFOd7YcqDRSWc3mZZsK5fPfA' );
define( 'LOGGED_IN_SALT',   'Vj6Wk2PWEAs0qG8HfcAyvZBsK8BidumaSfc1QcKZgfg9SvckTNmlSpS1Ps1VCn8q' );
define( 'NONCE_SALT',       '0mwOZWFdGUFiXQOf4x2nCGBMHr0ICh9tNiyQzXT0GQT3ZSgXEi0lC5XRpFX2qqCs' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
