<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xs473604_db' );

/** Database username */
define( 'DB_USER', 'xs473604_db' );

/** Database password */
define( 'DB_PASSWORD', 'HYV3uJtL' );

/** Database hostname */
define( 'DB_HOST', 'xs473604.mysql.tools' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ttA2^*_)c)Rj%.X$e7Q5nMaHlB!:A0o-N#68SYw9H:?<%aPjE6CqiM)F,]ty1%Lb' );
define( 'SECURE_AUTH_KEY',  'GgU`DAo)N;LqznW;j>{`n8]IgO@{@#RWrQnT]8DAI1n4{Nei6rFcz)F{Qh_?TGwl' );
define( 'LOGGED_IN_KEY',    'ad=7{deA^{TyLN`RmHrfB0~*JKz0eWs!GBI ,M4B LN/Y`IKD]QZ8&Udm7urDGa|' );
define( 'NONCE_KEY',        'rKY>b<Eue+q&Zu+f,GmPx$%h#<rc-P2a?^XEr(,8U=4CpA,476D 4r$)7BQYMj7c' );
define( 'AUTH_SALT',        '7?x>h0/~=%jc+d~SvPVxmFi5-S`h~@N7/tvcoP=fDpQr/rHx:W;^Ov>XDKXLmaog' );
define( 'SECURE_AUTH_SALT', 'dihBbJrM[r{578ZHnEf6wX+:5;]rh[/VKvZ1?;rugQ4={$5Cbtmlk)K(#|}N!Q.A' );
define( 'LOGGED_IN_SALT',   'pKO`y7O4L6]-^LJG(*4@9Q(XetP|F1(}tFiu0~6XG+obXw^mONNv{XGCbojvqz7(' );
define( 'NONCE_SALT',       ')@a.ESF;Y}Wk,#ocil&EzeZeNW!(X>Bk;#XIG*.()*|XMSZ6FHj(P+sIh&40NZdg' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
