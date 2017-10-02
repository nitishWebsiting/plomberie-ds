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
define('DB_NAME', 'drawmysite_com');

/** MySQL database username */
define('DB_USER', 'drawmysite_com');

/** MySQL database password */
define('DB_PASSWORD', 'Epitech69004');

/** MySQL hostname */
define('DB_HOST', 'drawmysite.com.mysql');

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
define('AUTH_KEY',         '(civj_>057{$ QIXMnf!/Blpbi3+1m2{g3a.j*mr<sxUs6}M,:rCG)Oh4a~lLf@r');
define('SECURE_AUTH_KEY',  'lEwGTS=U%8i4E+TFhzM|B$m)pEGQmfo`F`74xR)JCdSm!B7Z8NEH+Bi!3VnQlg04');
define('LOGGED_IN_KEY',    '0S7zImu53Mk8VCKq<`[nm2`[/J<Wu0B2 ,aHir,*G!`XB-K9}a+@M;FTjJGWz`dO');
define('NONCE_KEY',        'vnps2Zg+5HI89`jG>2(G@sOfB(k)M|6-1*9]yi~1S$4N|*& mPLL6r$bjcD/SgS%');
define('AUTH_SALT',        '2P8< >2f!^{Xo+Knv}sOx4xV[`v`*tSnnG[kJvj4*d!vG!jfu&F1/sun.SZ,_9K,');
define('SECURE_AUTH_SALT', '-&Zr/m][ `%N/<a wb+~Atp;A->,6+Z`.,#f$!41Ag0UY2W=hIs#VCAZD*UU$l.{');
define('LOGGED_IN_SALT',   'q( l=1~U/YneMQN#+Hsj93S1%]q#8oQ*x3:RA[[hG5Y@{KL)t.p! zT%h|F$a9Xl');
define('NONCE_SALT',       '_BrE3&XKOFV_A(LfthTYS.Im.WN!#vrjsLr(oe,DwRcs9QBi,b&HexE1N;=[xz<=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'plomb_';

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
