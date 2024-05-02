<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2(t<~iY`a/S52hk%|G4Lb/aY7TtZ)J;q=@fZWt2#WLG5pHAXS#kMYF#V@AN<w9X=' );
define( 'SECURE_AUTH_KEY',  'Qz&?](6)ZaaBs1U7!zz=p<o|#LEw+p[0U;9/m)rgHg^QqW-{C*(7b2)Ok|6`eh?U' );
define( 'LOGGED_IN_KEY',    'B6;=s< ,7I(uRjbEJa&[{F|J?2qeWa-byz=z?}wF>/u:y^r=G^XYZTDfFh&xq&f+' );
define( 'NONCE_KEY',        'o<n;%<>G[e6*r|^v.SQ2U]B}PV4zD-=K+wuzh7?sSrhAc.JDBq}0jT!YrAFi&)99' );
define( 'AUTH_SALT',        'i~=y<@^!K~rcXCuj5<$_W{hPuV)]&>pT>M#v3SrJJ!@{S_Zf|1=eO!ZL3tCH)WIU' );
define( 'SECURE_AUTH_SALT', 'OO?8lel6WG,xtcZ)V-ldj2X>`/ryC-9dQ3/b<11mQImJ]lR4~P%:7E;j2eiEqVj/' );
define( 'LOGGED_IN_SALT',   ':xX(3V59hS@LohyU&)#Up1A1|NdzSb~Y,7^f dI|5:ra,~AoO. &i@cO={YQz5_+' );
define( 'NONCE_SALT',       '.N*K3=pd);|#`[AgN~3GCqfp)dH:{eK5fO{t*~g%>g<R[Q[45p(JCw@0tV?FVNF{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
