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
define( 'DB_NAME', 'relofmes' );

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
define( 'AUTH_KEY',         'ZEfZWMCBO^S*hIu`[&W[-;_;tt5Bs}~dt=qttPljIl)`1s0^{A:am,R;mWiZ<#hd' );
define( 'SECURE_AUTH_KEY',  'Gz8x}xH,164TI2^_YZ^6UVBP}Jo`$qR569R@ +IUyijzKlRVWeexDXQ|^i@Vif[`' );
define( 'LOGGED_IN_KEY',    'Ro4P1@T@<=u#Ln2PI>XQYu=iWyb1Qaca|c1VZ!G8MG0gi8@u8Cct0p*lr6j?QVwv' );
define( 'NONCE_KEY',        'WU#U.q)wZ, hx]=wYIqM),pDu:y(}i2OA5$%d%JY%iht@+V:vJe_a,m3`#MAaF4}' );
define( 'AUTH_SALT',        '8n[(Cwea|w-U`2{5xE0[/]N-N<6C^fk!!)Ii>jm/hy$]>c=CCu-g?B)2CuF-&>Ep' );
define( 'SECURE_AUTH_SALT', 'lH(4Yfq+,9p^,EXx`zv&|)DL>.<?%s<&M+1OX:(ArA]ymzp_F!C[RAVn_O2k>.rA' );
define( 'LOGGED_IN_SALT',   'rE3a7^f;n,FTkteihKHx738^^*jGR}!/ZI1g8S&7iSXoI-})r#~yF=}LA1pg1C{7' );
define( 'NONCE_SALT',       '0Ic4jC;,DC~b6ECj7{pN,V$u0Ne}Xe Bvod5rEP8gv^4^De7i.Ue,|gG6K__v:8<' );

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
