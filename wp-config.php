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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressProject1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<nc>u_mE.l%$hT:iqT2vgNn+>>LMmW|uhyuF_oq09eyQg-966jGP<x@mJUW>_oPy' );
define( 'SECURE_AUTH_KEY',  '/N7Q~QZNS*+`U0NpHZKNn+SE!+cd~Wf!rW1=xA;{AY1rH9v&P*t&{51]A}u&kO/S' );
define( 'LOGGED_IN_KEY',    'Dd9V],xx<k+tvxqQeg+{t8/]N^<>NB<RTg&``MbV:Lvgw;Ha]@x2Pqt>-wID~[q%' );
define( 'NONCE_KEY',        '+gR?:1E,j)wog13lyt10p!-yTBdlH4tOvyRfcHVsCwAh$7~e^M`9,&/oiq`%z`ZS' );
define( 'AUTH_SALT',        'l7F#gRsynFm+j%TuUifxcyZAfzwZ1}bBqBZycSINBr5/z)IeAYN^UON:[zLgY][?' );
define( 'SECURE_AUTH_SALT', '4VCdD2KJEzH(G7<;vQ%GAo]bOiRwaaQD}Z`TjA_ z0MW :b`QOb){X){g3uF6ak^' );
define( 'LOGGED_IN_SALT',   '#=(]076tHqTXhRyX|4XzhYD;,Yp3j$S)RKqK?of}UO`:F/3$_#ji1%v&tyyk`1=n' );
define( 'NONCE_SALT',       '%;wk>MC>NPA`/0)!2-O.X/k-OKFp6RV$]UWq/L:|Ql+u9$@=lTW3~*Y$R<->lOur' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
