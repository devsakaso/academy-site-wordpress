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
define( 'DB_NAME', 'website-three' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'z!ea2TGshk{D,c+8SL<zl!9B-]6R%M[.-z4=e!TG( dW5xt| $~|SK!.n+4$:GaR' );
define( 'SECURE_AUTH_KEY',  '&,4fY82 AXZ`/n@4b)|:@[xNJ*qQ*}cldl1p+2bdg+(I:K~z8UNc?^<upz1bXDD@' );
define( 'LOGGED_IN_KEY',    'dd#MHx&*ajD:<71h2ki<.b`29vCm)+y,97bYVr3mp:+XKR>;|fC.6vMvun7u$+Vc' );
define( 'NONCE_KEY',        '(rpgK:*Ae6#kV.cFA!)<QBxfP4j|QfI2GKR`(0T0PDh){j{D+(p507(+C%c:x.G8' );
define( 'AUTH_SALT',        'eYlA+H$qmQPXDjanu?T8bJ.s@$vGLu:+cx}k].;00$&qrI3=Rfi90Z7%>n7j$fsG' );
define( 'SECURE_AUTH_SALT', ':^1H-*`u8.Fd`d4qcKl5a!^8Dd)mIM)qLuf{CqNrKvmy<-[&z`gSs>8o$`}hzso,' );
define( 'LOGGED_IN_SALT',   'nmN_[.*C>) x*T~I)pu](5}+e_i Hq_h`pX2h.qZ{h=#[)gvKR6Dj,PGSY%<xut[' );
define( 'NONCE_SALT',       'GzQdM,E1o !hnKz6:.?Ns.9PX)uaeMs%nh5Jwn#3!uVQAAwE>IUW.:s7t`HY[r]I' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'website_three_';

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

define ('WPCF7_AUTOP', false); // 不要なpタグやbrタグを出力されないようにする

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
