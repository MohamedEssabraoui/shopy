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
define( 'DB_NAME', 'MyStore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '__)<hc:rl^^ ]}R|5m=_n)AROQ&+>?@r|-`;+5{JMW*YzJ7]O.@j8W}<-sMJ9vMN' );
define( 'SECURE_AUTH_KEY',  '?+o=QNU#o+BqcR3# TOsEzg>Zd_^jYq>5Z9[*?}d:a;v(5}g=7Q|GL|.qy7b}:#,' );
define( 'LOGGED_IN_KEY',    '14~K3&;K+y}?v1rhxZ$Zrb}m$W_Xa=R>S,LkhkrA4R XwAA+6sdU.}kAfQ>^&1_9' );
define( 'NONCE_KEY',        'n<#w@g gYj0{>=8:tj+=>udo>q-AFRo)^QG989]+U8^|m-@4SVd_6iRdY;x~GH!u' );
define( 'AUTH_SALT',        '$g{xxxs]bzQ[l6:E?oD(x<BOLsO2$g6^36^dc}Tj[x:MEpZK=97%BTo;Pi![:xmS' );
define( 'SECURE_AUTH_SALT', '*[?A9B>}L$Te!>>-}/rJ2C]vB~{l:6L.*-&sl^ku<+C|x]U)j/m7OXY2B MDZ~BS' );
define( 'LOGGED_IN_SALT',   'fX^z_Bp/8C#UgnH;ZsR]1!J)Y~hAw$wLQg+GBsy5!.KL4iRis1L@e:44{&_$+dLn' );
define( 'NONCE_SALT',       '+.$BqME>K55cR%kU]b|%ECo:}d_%3[Q#1Jmv%*%>n{WHg:h7c5dwM>|6{LCAfskK' );

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
