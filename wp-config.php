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
define('DB_NAME', 'cl59-a-wordp-ot4');

/** MySQL database username */
define('DB_USER', 'cl59-a-wordp-ot4');

/** MySQL database password */
define('DB_PASSWORD', 'rzq!BdjbW');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'W=c4oEe7LVKQPgWt0Bg8H2wTu8L5#Vl8Yb=WM#OME7SLa_Xby5rD#6a#I#+VLWUE');
define('SECURE_AUTH_KEY',  'acl7F9E3by5FY-pHSNF=YAaiT0Zgw5LcPRnDkfTf5!i+H2WY6_iXKfs0Crru)cqI');
define('LOGGED_IN_KEY',    'wD2_YW2tj/vr=!Iudv1mxDhZYQDNYg19!wyPaNOv#keEGDMP(rM(/8^8UzgLKXuF');
define('NONCE_KEY',        'KGScaSc6mh7XA)-s9RhE7sw^gbLcIvT37OhbKQ2kBLAi#kBnyQ5IgfrEtc9fpNwH');
define('AUTH_SALT',        '2xRGbL0jnW((wG!q8m+3!Sv9qsFGaiBpB/gQm_BwWYfP#bnRGq^V5/86mfjXHygQ');
define('SECURE_AUTH_SALT', '#+kOp/n#!4wQ3fyoJQOF9B9^06EChgk/AY+NqVDdp^v58XmyS)zVC#j2f)XbDS^y');
define('LOGGED_IN_SALT',   '-IctlDzyfFWB1P)M=UB-sNAT=zeg9N-bSU+yW_(eUUZZBOLW2FX#XsQbY3SXx7=J');
define('NONCE_SALT',       'pQM6chOZ_ULLefvuj/rF4NJ9!!fRT(ZqMvKNF8P57tbd4msjmu1EMyffu25Pt3wp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

