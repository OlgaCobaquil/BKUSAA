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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'sem1');

/** MySQL database password */
define('DB_PASSWORD', 'saasem2000');

/** MySQL hostname */
define('DB_HOST', '18.218.101.247');

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
define('AUTH_KEY',         'p>EM#HW3Xc^N53.m$/:6E!Dht!XY~l?zQmF0rmBK{ft4qzp#sF#CqFM&!!kpgSYf');
define('SECURE_AUTH_KEY',  'Z,Hm6@?jK9j$fEDB#JHF!%dRg;lafxQo1/=.g]xHgK#mKJFRM9QN:MT1&Gtmjq;E');
define('LOGGED_IN_KEY',    'm#atxKL4t^W&;CN0j2DJXx%Z#W)4-|Fy?LTLmk|Fp();36YCChWT4NoyF9{ l~6n');
define('NONCE_KEY',        '8])Z#Fx@o)Z^_x+xNgRQ !F}CaPJ1$nzcC-jRd3H)s9+Ao]TEiFy^H%RR(TZnSV(');
define('AUTH_SALT',        '}8vm&75Fiu<ao.m).3F6BBJXy;EJh+w3Y:<GT`&@K{O8`Zs]n~h|Avk0O?RGuA>+');
define('SECURE_AUTH_SALT', ' NVfvxMo{tJyb{3ua#q6459l8kW2)F5VqyXIWL53fR.)0M{87tbqbOC*y=@w`8Ry');
define('LOGGED_IN_SALT',   'n6/*.0svjGc[&yv){{0NlKeqka9zsLgH+0I7[)frRH>dwD8at{]mNm&#a0>qs~r8');
define('NONCE_SALT',       'JD({PNe[4V`1RNsL1*dDD/F}X2/n9pA(wj]sA=Gm5FBJqT?Pq^xG.hngA@n3NXe:');
define('WP_HOME','http://www.saa-sem.org');
define('WP_SITEURL','http://www.saa-sem.org');
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


