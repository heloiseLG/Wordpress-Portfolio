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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'si/nFsyH<}%TV6a9];+{ ID`t=nUakuxBlTRH,A,@Y*GH&Q.*!sCS?RTMm0SeMR@' );
define( 'SECURE_AUTH_KEY',  '47G:ilBik lCqRS/HOQ*1Q@9YaJ5KLAP(`0=CXZF4=EY-f|D6mw-1GI7e:wG+T?|' );
define( 'LOGGED_IN_KEY',    'asqm}.D3@?H3OH_(KQtdVuM{572:~%#Bq$;y5P]drtvZ+^=$IJ~5L{z2#7g>8Joh' );
define( 'NONCE_KEY',        'Mwn4oJ^+sU0ErR[Pm8>>atw:#IBA}I#X|CcQ oGNYXG*wGif(H$yIafHDO|yFBVs' );
define( 'AUTH_SALT',        'r>h/KzxxPfui/6:;JCAR%x+L,B5g`$=o4RStzH1UHbl (fTbDCN(j=b)Nmhf[&0M' );
define( 'SECURE_AUTH_SALT', 'd,/H+C4 4:|zM}EUUkP@eFm/b>kMW9k_^qe_:#/(=ke2<-K@??5/}&5oCOppTw8E' );
define( 'LOGGED_IN_SALT',   '{|8>BL)^0?]?>3k<9,~(2Da&.DQy_I(:F$%fD!H $[&o`fhf^ D@~v%ReWzLv)|i' );
define( 'NONCE_SALT',       'Rz+%HbU{<-n:)JcV yDwjeBz|y_;%v;+16sLXD=m^v3u3S<9sEM[2~@5<3hJ[w.N' );

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
