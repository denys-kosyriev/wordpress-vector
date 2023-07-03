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
  define('DB_NAME', 'vector');

  /** Database username */
  define('DB_USER', 'root');

  /** Database password */
  define('DB_PASSWORD', '');

  /** Database hostname */
  define('DB_HOST', 'localhost');

  /** Database charset to use in creating database tables. */
  define('DB_CHARSET', 'utf8mb4');

  /** The database collate type. Don't change this if in doubt. */
  define('DB_COLLATE', '');

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
  define('AUTH_KEY', 'i7|^%gLEfbe50Nle]Es}dpn]_u&+;K%!cMK=OQduHNN4Z&Y,sA/_.K%^0ReG|r!i');
  define('SECURE_AUTH_KEY', '2pu$!ixdndkt6fQ}[dE5&Z;@p~Pixh(7lMw7:S.nG8k/V+RQt=g}UKBMcm_+frdB');
  define('LOGGED_IN_KEY', '1%Gg22V-q KMhFNMo ?+(E-]36L7+5hqiy3jyg}ai#j@(Z#6/L7I8} a48`>4km_');
  define('NONCE_KEY', '(kj)hP3tvh01KrH1Dowx6wkU=$7G[QyH*C=94d4 i_z!H@<NHilZ;}@!6Rv>(?t,');
  define('AUTH_SALT', ' >K8*qODdIC-I^.1LFkG*Aa[M &V1ktaC}?9r@hAQp7lfKdS]1&8Ck?=9+Is}hKZ');
  define('SECURE_AUTH_SALT', 'mMiHTTYhzR_I&OosaGnh:7]v-&cQ/zS9d|Ng.VErg0RM4<Kq~4vw4Qb6HnKE)x-%');
  define('LOGGED_IN_SALT', '.%fBLa:R<7(o];g@<3z5pZU;oJJ}IQ=pXBX9^KH_Q(P@v2::A;;>$x~oX!2K)8k2');
  define('NONCE_SALT', 'KxqbHL d!;h1=X|+#YQPi]FT$/;vC;GcF.)j1,Zvx<96rW7a;u, s}S c,gGI5Zp');

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
  define('WP_DEBUG', false);
  define('WPCF7_AUTOP', false);
  /* Add any custom values between this line and the "stop editing" line. */


  /* That's all, stop editing! Happy publishing. */

  /** Absolute path to the WordPress directory. */
  if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
  }

  /** Sets up WordPress vars and included files. */
  require_once ABSPATH . 'wp-settings.php';
