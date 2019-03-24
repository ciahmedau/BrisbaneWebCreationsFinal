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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'brisbanewebcreations_db' );

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
define( 'AUTH_KEY',         '5,d>~rA@%k5N>w7%IqMMtCX{KvB;^ChaLa&,vP/b!15S^oY0b YTB>-:14J_tRJg' );
define( 'SECURE_AUTH_KEY',  'wQ[_7!B%/7UIq*z!V UMMd,Mgx@mw*Gxt0:~@US(5cz^TMyx,2t5(5Znz]eZL |Z' );
define( 'LOGGED_IN_KEY',    'W[!^}TMW>U^r}n=oQd1.6R t=W<F<HW:zLmdA-p9FZaO39~u`7^U~= v;l[ly88(' );
define( 'NONCE_KEY',        '+ ;I:l7g_zNU;Am?ZJ]AKULA=bWaCl:)KYzl`Vo]%[=r}eyD*=%5eV5qc(v_a4s5' );
define( 'AUTH_SALT',        'KLtOa8*TxtrYJ[Y0O[V6GGzDRk(8D.a}Ti%y_->)SwE2uPq?6vrP_Hd`x-Ed,(we' );
define( 'SECURE_AUTH_SALT', 'RmHACafLl6tCC;CRs5z1Ts#-/|<u0qF?/KCa_a{t@jUY?OY[cf7wy|zEZ1q0(ceL' );
define( 'LOGGED_IN_SALT',   'fk|8IR,y5*ecGXMfy*Q4dBR0<Sr}8N,hl4<1[/V8~C~p>0J0Yb]E9?FH.g`dxW~R' );
define( 'NONCE_SALT',       '<5/h6oQR2rrf0i]SAf|-`J2]T-/;~uB$lH+8ar16lse`9lwTJUhH y?5+9pRKSQe' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
