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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '{{db_ip}}');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '-eY/;WRT7ED)TP3{>%yaQ9fNuYUbxdoTULLeLL5i7}LJozs-=09Q8dKl7s9Xv&w0');
define('SECURE_AUTH_KEY', 'k!yA>4wOE{,x-FjabzGBsXo-PeO]VOIXY_G}Z$FYCK6Nud@Ju9s+AU!h`[U8rrC&');
define('LOGGED_IN_KEY', '4XcZTcIv+W9Z=9A$}3$ <5r91duqr/iZAPx*j:zb*z,7{OBKUQ0.FJ)TJf&p;]qz');
define('NONCE_KEY', ' c12jeG~7IY@`h5?c&1gQ5_LNEaqrQ=e%sC8|D7KrL*@}3>6 ]CQ|R]%0F0LrDr5');
define('AUTH_SALT', '8Jmt*H}`H=&o>P$S&5.pBCb_FqG2p$Wo9I(1v*%bWexH)~:|WpgYiP<=a!}W%8e<');
define('SECURE_AUTH_SALT', ']vH#<pxMGW6!4hp9WqT~=6:PQsEu3SOrL8^w%.x7ex>PMN.okWdoU%i>a0wO7sQp');
define('LOGGED_IN_SALT', '4!Hv<rU4_8&ezy@LY4Wgnv1YkagTKUxD?C;yVd! %3|%U}HbhS%>-8iVW!/aU$^c');
define('NONCE_SALT', '7=y,;Y:f)(}L/4jRSY&ar+vJPp(:+-m#>x0//!@4f<kH2*_rq8HlXlZ}oSg]ThOW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tables';

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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
