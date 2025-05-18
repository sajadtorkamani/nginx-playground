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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_php' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ';avc>sxpm~]*B+}GstQ<Gw%nzm)>^V N_8_zD!{7oCM/-<#CncpjU3NR?4@z*uwD' );
define( 'SECURE_AUTH_KEY',  ']2/9_*p|w3K3cqR}t>*PTa%F.B65lu)7&(w?=1W0&#,o(xueM[#;Vt1G6Xg7Rr-]' );
define( 'LOGGED_IN_KEY',    'n|KoEjn jF7g2x2`,HJ<^f>6t*.Qc{*sc)}bU`*>(Pl21]v&E*Vw@p(_RZ,@Wff$' );
define( 'NONCE_KEY',        ')-b7%ciP?UsWf~XhjJe/yB5,41sJ/n&ZW&*GlU#NFEkMJ!]<9V}V$_5cQr~s}W*t' );
define( 'AUTH_SALT',        '25T@Tu48~Bnv30TpP_D>@ ~p}v4rFQReo?!jE)g*Dd~~L;#A0iL-J/=$T]W{i9F:' );
define( 'SECURE_AUTH_SALT', 'UmX.:hl5i1GT/we^?gV;Lr~;g3-]vkG[2Zu4Sk99lHdwCH|=vJmC1>VQy-SOAR:+' );
define( 'LOGGED_IN_SALT',   ')CT${]{-Jirl[?-;:|bAlHz3Kg7}2B?XR[<SGO8ZpH4~?<]F)R{<hN)|v1,=tl*o' );
define( 'NONCE_SALT',       'XU5WaTK||.u_/o!UX0+FyejQOz*vJ:#wu@; &`3`g=>->RzBhY08_R|gm>r_=xnR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
