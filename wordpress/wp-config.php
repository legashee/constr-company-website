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

/* custom settings */

define('WP_POST_REVISIONS', false);
define('EMPTY_TRASH_DAYS', 0);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('DB_NAME', 'ekoremon_wordpress_f');

/** MySQL database username */
define('DB_USER',       'ekoremon_wordpress_1');

/** MySQL database password */
define('DB_PASSWORD',       'fBaA7P4_3m');

/** MySQL hostname */
define('DB_HOST', 'srv-db-plesk11.ps.kz:3306');

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
define('AUTH_KEY',       'z2#@RtkNPz&8GqCx0%&MPnqld%U0Kw7Q6Ee#X6*bd68eo0%Bl044t^AMRPfmDh49');
define('SECURE_AUTH_KEY',       'v7ysyOS%hCE@@UtIUG0DCc^XcOU8uxD!)sXGMh&sMgOsk!S6RlkPEnFFJl!PU3na');
define('LOGGED_IN_KEY',       'QNwbwc@7OsNZL4YOGn9wEJjN%Cebj5Unf)^@!IuyQMhzUwnH(64hF0#41oVg#0Xi');
define('NONCE_KEY',       'xSWfxYKx0V&pDqRFKJVgi3&sQXB%PGmMehwnO3qaKnmB^!)hBc^S90R*hoA!r(KF');
define('AUTH_SALT',       'lFbokN(qxSvuz6tQQSGRuMC%z1NK&Elj1Ef%b*C*RlnL(zEzN1(^tVmJwMbFKR#h');
define('SECURE_AUTH_SALT',       'JpxieNdIWad1p8vyHaruQ)9miPp%JLl8Gm#8(UEjnmViRsR4hklRX(Y^R17a1eIX');
define('LOGGED_IN_SALT',       'u0aI@uXtoZVDfqM)yxFhGqQ*DuRE69KFO)Bh9p52oiW8E32gKjkkeON63o8T%mix');
define('NONCE_SALT',       'WBOTc2B%%On)HaRk2wpyl7HR&59ibCAcD1TGSvgm#znaQIdZihA%nJxg036PO6Na');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'SApHpnsY_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
