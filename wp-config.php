<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'exploro1_start_final');

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
define('AUTH_KEY',         '^R/t_+iZU1t1@x,UKKC-O44vsa$ftc&1ekL{|902]JnX4#dGB[!FHO0A`meQ*,<Y');
define('SECURE_AUTH_KEY',  's7atK/;jt+w5u!A*_lYlpT1eM-#P&u+/JnY/nwY_4_^AETgpDvs9Q9eSn:,r{]bj');
define('LOGGED_IN_KEY',    'r=B^d)pJN1-Xw<W|^H<BAihX5ePyRW18}Ez$qizqadL[Qa8%|=AqQU39-w>s:0q(');
define('NONCE_KEY',        'wTk_(pA0i@}-saY*L#bxMgfR_45eUL`iYqsq*C|e5c}Ie?C(P:$Et2x,-]$Ii0hg');
define('AUTH_SALT',        'px-.2g*!Ott6{M2%tM)2s=]IFqHf68eN|?H1-sNv||GLgu/rfWwhY)_>_j?$!%)d');
define('SECURE_AUTH_SALT', '9!,yykuC|1l[[c]s0I8gl/nxb+BmfR)|sS!||+XiBqL/oHRg1z_K@|qeF-6-lDTc');
define('LOGGED_IN_SALT',   '9}090:`U|?+-8y.pS6[LyF o/DGJ-ZwZ8|-^H+tX8pq}ZRAt 9*iw?]b5MAjvlVg');
define('NONCE_SALT',       '`1|B<wAXczP+T4s-K~Od |d#l> 6Bc)N-0lb4;AK|:=,s|+TtH}3nR>?Yg507s8F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
