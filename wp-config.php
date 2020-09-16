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
define( 'DB_NAME', 'hello' );

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
define( 'AUTH_KEY',         'K7 M,D6)Du4 >_^0ZKw=ei^2Y!0dVxi8F)z1f]+(kZVH=@`wTtK9zM9GWY{TJ<4.' );
define( 'SECURE_AUTH_KEY',  'e8}cSqu[Me^g4bUTh~AwLoMq,_w!D|B2|I@Um~}XyqS<a04eN5-,m!E$4~6 ?2Z|' );
define( 'LOGGED_IN_KEY',    'N#?uMdX+M9;hLg5tY{Rr*7Z}Q{_qZ6n0!$Uv|19ieD=hha0z6fxxO9mX4yp)24g|' );
define( 'NONCE_KEY',        'A Y)oMnjkB%@6ATLey~FrA~/E{f#;1RONbKOq[WV.h d&@.iK_[_?fcYbQY}!Z5,' );
define( 'AUTH_SALT',        '6[vo= fhmKi,_v1<vA.P@g,fYn.cex8}Yi$qq!iQ2h{?,lrXe ]RUb4Bd41-=9Yr' );
define( 'SECURE_AUTH_SALT', '+RvV$VVsk3ZS+J1CV*$3ug:X)W;T!dXZ]-Q1QKEq=@sm`GV81iscwh>TYGn4%!Hn' );
define( 'LOGGED_IN_SALT',   'SoghIe<)=]seOe~KE5UH(THPSqi7hxBV#H2:VNiPfZGUrt@F~;k?T^OHg(>7jt]^' );
define( 'NONCE_SALT',       '7v8bFmN?O>8$fb-k2NYvT!} 7*t3vdc*5{&Mq;?_1BaWj>Iqpz0mU%bb6OzF56y6' );

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
