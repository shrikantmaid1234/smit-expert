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
define('DB_NAME', 'INFOTECH');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '4d>My_{dcgc4Tp,%*MpEvpGF@*OK;hk/gi}A)+-Dl-B0uAYPap9[G;&%tzR{b$@=');
define('SECURE_AUTH_KEY',  ':_!WcFnF]#EqAZBxkz|<GJZ-I1jw3(N<*z8xZ/aaj6!`{.(Pas2=LO[D!~RA]NM$');
define('LOGGED_IN_KEY',    'N!Mte{ n2hs+^TMU V{BK;r]&E>qBwNOKtzn0!jdq+G*zeg8Oms(d3I)=GwcSFHc');
define('NONCE_KEY',        'OG/7f$GX;pFGbT/S%QZ+4^gLt0iS6*yMxfBo#B/g&J#6ey4{}W=@gZ~DK@J$6Z1t');
define('AUTH_SALT',        ' 2;rrvdW)U}tkoNqRr!{te#7;MG?8]+!v8DFq ;7mO/)U3>3QEH]@iK@!-(k?07C');
define('SECURE_AUTH_SALT', '?R!bh0EvC,~n7eD6.RE;RSMY<BiQP+6NB0!(/0%D/?3kbu9wD>J*3XDM${_Vh-nX');
define('LOGGED_IN_SALT',   '+ H 1dHHT;]a}VPPj{LPfYNDIyRMo#+mZrDMf65<v&>)`SK8TgV2PXv0TjmnwHg.');
define('NONCE_SALT',       'n`L@@olO**jZZN{oD+aRL]+`c#~6h)rva6uMebN-f1`Jid9#ngPn3H2dF&qxR,1@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
