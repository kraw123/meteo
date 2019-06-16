<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u558062345_yhuqy');

/** MySQL database username */
define('DB_USER', 'u558062345_ajama');

/** MySQL database password */
define('DB_PASSWORD', 'aMaQuZaSeW');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'EUe4swsEIxM3VvcUsJvCq1HHFpxCvj5ziZAvm1A3iUoqVo2GiTsHfNT4nHQTqEEX');
define('SECURE_AUTH_KEY',  'ILPsflQvrACNBiguTl6RwQOiZBsdtcnQArcwmUKwArGTilwCc3wVG6PTSA61pR8z');
define('LOGGED_IN_KEY',    'P6jV8WTUr4C1Heem0pUE3ahDSNL8KaR7YX95NcoeazZJ1ovhRIbB5h3u8r7GrFrF');
define('NONCE_KEY',        '0bZwoCxxcSRCek6ZCRV9xVOCJ1ClNMjb9gLjepUql8wOfIwEgS9Nh1AKP0wQyXcd');
define('AUTH_SALT',        'hLXQpK7kJr2m90bZFr9v9u40zOKvWI23SGtSmswscGO4c9UEKvy2D0BBaZagOCno');
define('SECURE_AUTH_SALT', '8Q9sW46TTtTTvkXW5EFuM3zTvJxOzHFMDKyvshAbqz2cDmyrvtsNLkF2JTXkMoDT');
define('LOGGED_IN_SALT',   'iRw2Sy3lH0OwjmCxFwl3gEN5ediVBpwV2fgKvVFUGcJ7c8PrXJqnVxiT0z2YpuC8');
define('NONCE_SALT',       'k2Bva38CdstK80BeU4jEStIzCaZd8R9irEt7k7LkiKdSWvVJK4G3pAgXGb1oJNHS');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'so8b_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
