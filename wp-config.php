<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db775553728' );

/** MySQL database username */
define( 'DB_USER', 'dbo775553728' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zpbPjJOAQIsamdpxhxUr' );

/** MySQL hostname */
define( 'DB_HOST', 'db775553728.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JBh+;D(w-F2CmTd~94bi+>;Gn]pLnF(qnf8RsDY-~yU-7u7+e(o2&Dl7J_[/,O*5');
define('SECURE_AUTH_KEY',  'p_xNSeh0G[dc,$`@|!ig&Gd[}w:-8p}*,^9VVnk}cwWd 4sSQ8}yr5I[+M,eAWm~');
define('LOGGED_IN_KEY',    '2(g=pI_B!0zQ DL2<l?@BW`.8cY.dwJwW[=)__gP{XxzTNH!MCg`d0|-4ZhQ:m^=');
define('NONCE_KEY',        'wS|br:h:726zu/-h,~OU`[)F|3828oI7S{!H3HsC?3a,f^:&w/G{`T99_M),H1Ou');
define('AUTH_SALT',        '<=q,6E^d_{-OM+:&S8MS&97A]Rz+-kBsHNW_lQ+;A*X*Qa}f].CsT[,+>v<M|t.c');
define('SECURE_AUTH_SALT', 'siJT(o8>{JyqwjC&E7?)B6.5Qw#VG!x6F1ElTI|Q&g|+(xT*/2~L_9olZ-i)w+c6');
define('LOGGED_IN_SALT',   've;aTHyhdlsD]QK]BSmfA:()U {m(7yp6MdM4v;VQJymZ[L5-:2W/-gK}@y<(IHi');
define('NONCE_SALT',       'iG` dT)GHupPKfeKEqd+vFy  zXqfux9s7hT^v./~+fUh#O{Nt`_7swVT#Qd*|`d');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
