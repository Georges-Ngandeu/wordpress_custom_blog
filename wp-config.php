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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', 'Y@mdeuNaom1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define(
    'AUTH_KEY',
    '<o>xW (7g3$Ecj:auwmxcd>|jxoWX)ufgxq9ze0MSzq0!.59h@ boPr$s(rmt>m9'
);
define(
    'SECURE_AUTH_KEY',
    'W*x4p.DxSfx!M02p0E[^< Rn3zAg;Xb 0x%7wU/R?K3H9V$5m(7hGKN$[CR9F&RJ'
);
define(
    'LOGGED_IN_KEY',
    'Tjr%kk ^PYK!pN,7+B12m{atNga=8~nmz~p(u!?&Ht<Mmu+s0n|T^TJXK<BY>,<B'
);
define(
    'NONCE_KEY',
    'K!BQ)k<bAWm)M$aNy%RDU))&zUrjT|UQ}r6[ OeBoJhR(U5k`e)rUd[C-/XCe`(x'
);
define(
    'AUTH_SALT',
    'AFBCFNID_fJRj Ww0XG=Oga9_J-d:}(_&R4iuviu.9xWSzfq?r%Hwl#?S3wu~0`e'
);
define(
    'SECURE_AUTH_SALT',
    '`Bs]Y$LB]~6wi_TG#OQiCS1$5y7{<-BSh^kOnUw_!sQyPsgS[aBjhu?l~<j?!`cT'
);
define(
    'LOGGED_IN_SALT',
    '?`9eUEPhc%( xN+]J!HT<ulBTxO;u1wqJ[S~DgdDH- 9/`mHVj2(wq-(A}hOP[DG'
);
define(
    'NONCE_SALT',
    'fZgZX<EIrAzJs:V/:IbCjNkcvK)xp^=KqsB-xsWgWJvbp.IOI(x&z;CJwCR(3-jd'
);

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
