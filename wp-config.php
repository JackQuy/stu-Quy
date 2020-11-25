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
define( 'DB_NAME', 'jackquy' );

/** MySQL database username */
define( 'DB_USER', 'jackquy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Thanhthuy@1705' );

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
define( 'AUTH_KEY',         'X$%/dJK`OABA/RjcX44Jq_%8vu)(@A,Q@1IRME58}<|KN@K+eZ^M`X*y`9-@A/q&' );
define( 'SECURE_AUTH_KEY',  'Uxw@!W+rwOSY5(>*T[&+=f.Va_m3pBnC#HkuvcW`41K:58b3S%h(RGm@g#Q#@{lK' );
define( 'LOGGED_IN_KEY',    'dQz3>-/,4SKOM0f=V)IPfRLrdzoIE6J9A>4OQ1,C3~&Ff GfMu^c/XA4pS^7 maA' );
define( 'NONCE_KEY',        'JF5eb62P{rz{{[pg8~3#De7D+T|`A`t``CISk|oA|[9~JRUa%;n*y:k3{3)E6gGN' );
define( 'AUTH_SALT',        'K83kW7b:?wxt.SnLhKe#a|l2J4X`MVI~NX6xbe73u**NBg6@C4W;&1P6<ILfw[ut' );
define( 'SECURE_AUTH_SALT', 'UaSofl[a$Jwi1D~DO<zmF(sGObS{$8Y3c-69?60Kwt <MMw8@E?J&AI_s&-=?n1T' );
define( 'LOGGED_IN_SALT',   'i]7@`|dT_R{}OcL({J|W3&J2hx!OTALw40D(F~, Y&^K%{<y<*t6YQmJ5^~a5qSw' );
define( 'NONCE_SALT',       '{$y>?]&m,=A5uNyi.}|3aUgx;G7vmB$tkQBnaSiSBXjoEB<mO<HRo]W_{:+5C#>4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
include_once 'new_config.php';
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
