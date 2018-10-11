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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpchina' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '4J6Lr0VNa9SXfQmglTl2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '~/P-.Od]> gj-RUmIw9dQ?})+i}YWx|{FEwdM;*qge4oenU=@*z }$Uu/1+(zP?Z' );
define( 'SECURE_AUTH_KEY',   'mn0tu_5-3-vT,dM+yK c(pZ^5wIw<VO;SFqb,c6=BiY0nW$[Fbfc4v#-5]mcrc#C' );
define( 'LOGGED_IN_KEY',     'a=NU5+:+QJxW`XY(8Ne=tU$2_^ad<J8/tn_?R!|zs>Zhynr>vZQE=OJ%,0~7;*3n' );
define( 'NONCE_KEY',         'YpRQw-r,BoJI(.#_]Gaw&P:ZmZ1==v.gV<S RL>H<Oq,g-0zG&TA]c3cL$Q=&5V]' );
define( 'AUTH_SALT',         'mY+FYiy3}.6^`ik~3)#]}YvBOg8oRr.Vg>,pG1Xw.EZT&x*=JVUujtj9q#J{ZSFe' );
define( 'SECURE_AUTH_SALT',  'lwa=pom!*NE0k5^%&h,x++YSF(qsh(/Zk]bW h7c71UTu  }b%X#Mu@9FeXi#NEE' );
define( 'LOGGED_IN_SALT',    'bx@KAra?ocn2gojwR<J<T|2w73|;!c2,KHgEB8xhL~H[!g9nb~X2*]B[V4Y>f?dV' );
define( 'NONCE_SALT',        'QiH9MQP&7G:,,R@6)myH!3;L6bhGO<k;m8*$|kPg6bC8]`6Et}-^4Vw;umO+FV~.' );
define( 'WP_CACHE_KEY_SALT', '/8K}%JE >y+>$AzxKqTPopm7Cyh4lrCB:u_k0[C>:1R$<e@78!{4|}K*f,Cj%>&d' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
