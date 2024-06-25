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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Dkj=6krE75.Sl.FzfJEs+TwT}hzi1bV86|lNSXSjisK.TkN5n4pCWbGr>]7Gz}s;' );
define( 'SECURE_AUTH_KEY',   'k!9xRH(Kh^^SAS YWO[0!GK*z<{m`#GP03sH:Z5*dfAPP{z-$RYxfCcXX~!5G*0y' );
define( 'LOGGED_IN_KEY',     '/S0~7)OoK.=}D3XpZ-T2m7L?NZ)y?}E]0~}#m_qYT#+<0#zxJh0/hggdgYh]|KN}' );
define( 'NONCE_KEY',         '7^qJ6wf{0JTCldgQU/QwCWXn$A315G2E@U&t>h5hlEut=:Vfdo4N:@mfEF(@6CCo' );
define( 'AUTH_SALT',         'YIC@[&^+g@xf8&s17<u8[A`+{dX>W0ESJ,.i@0E~-E;EJX9n1;-Am0cBux9Tv<?f' );
define( 'SECURE_AUTH_SALT',  '`-xoJQ)*}^;5/:/bimwG;_JVB6H{86@/wbnSg#cz6JHsSKq2gOvZb$+%7;k+@saA' );
define( 'LOGGED_IN_SALT',    'n~g^l~^eVNX+YaA#e>ZufA_6FlH2A4PVum9ikwHHpRx= Bl_/.4&K4K!]6SPm-lu' );
define( 'NONCE_SALT',        'bU55<V({pf=T(&UET:w}:en#}@#%tyE<(}9,|tUoEnR!kNu@sv5KA0u],ES7kv/b' );
define( 'WP_CACHE_KEY_SALT', '435-ner0K$,P-M~Gdn/_I&m?3%  6IXz*m{C/5GJh Ig%e#or4<yS0_VO&bMi::6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
