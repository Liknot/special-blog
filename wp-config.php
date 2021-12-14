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
define( 'DB_NAME', 'u1244822_default' );

/** MySQL database username */
define( 'DB_USER', 'u1244822_default' );

/** MySQL database password */
define( 'DB_PASSWORD', 'iT4p_5Xi' );

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
define( 'AUTH_KEY',         'uA,G5Z^5;u04s}G)F>Yi~3qIu],_X]dyBonw+n)K1rP)p,>kCCRnMA+zC/>/}.,M' );
define( 'SECURE_AUTH_KEY',  '7&D2,4bZht]W-fN~=X5[}W,i]O,^LAn:%IA*mQu|k$X|Jg*K5h0W&KNqZAvt2v:X' );
define( 'LOGGED_IN_KEY',    'Cc)jj-oKz^w;4wRf!%T.y)0_!Qdyj[2!C-@;!s,.IXe)rb9c(Sq!cCifnyU`#hV ' );
define( 'NONCE_KEY',        '?kH+K*5KXEXu^smF5++`(XM;oWq`fc2b^HcVhLLmQl9Llhe$d?[Uy6{rvo;v-#F}' );
define( 'AUTH_SALT',        'jKoAw<>+RC9k7CV2A|Y39H|/V,a !T_*3pjwJUpa(KB*_sfF~FIszGTy[A8a-m.^' );
define( 'SECURE_AUTH_SALT', '>Sfiy|A{bdS1h3$UO<mxJy$2 Bg?d/vTk{=SACS{Q/0^?_GWt.,cc#m`4?Cu)RM@' );
define( 'LOGGED_IN_SALT',   'd1AJSFBgxt=q~xi9-Mxs _e5|Oeb_NH0~FX{^0SmGbPrWM4NP-0hWWZka_sfF;,v' );
define( 'NONCE_SALT',       'rHe$HujDKZm#@> EFSBlj~,,F5hh|.3$?uIUK~JcAnpx#_D#V;X/x8|tB9O%26$Z' );

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
