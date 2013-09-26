<?php

/** Load the environment specific configuration file. */
require_once(dirname(__FILE__ . '/wp-config-local.php'));

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/wordpress/');

if (!defined('WP_HOME'))
	define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

if (!defined('WP_CONTENT_DIR'))
	define('WP_CONTENT_DIR', realpath(ABSPATH . '../wp-content/'));

if (!defined('WP_CONTENT_URL'))
	define('WP_CONTENT_URL', WP_HOME . '/wp-content');

if (!defined('WP_SITEURL'))
	define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');

// not allowed to override as it is really specific to this git based wordpress installation.
define('UPLOADS', '../uploads');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if (!isset($table_prefix))
	$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if (!defined('WPLANG'))
	define('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
