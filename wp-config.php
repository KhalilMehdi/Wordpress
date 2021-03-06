<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j~WpbpRz42#2e(!n@/;BY|hZ[E(dl[N@s4;aP8!8j3.fWv_-:A.bBvBLq~#nXrbz');
define('SECURE_AUTH_KEY',  '^2M)2IqAvS!OQ4B;$%<YmO4Z =oR$`^P`5 T6:>SK#(.0+#XUz@7DW(z|nS~-W|i');
define('LOGGED_IN_KEY',    '+Wsj}ebGuT$w?1g e(pFk&pS7caj7F0.j4uFn@J;,/rshf:i|gxOvk@B^[-p2f&7');
define('NONCE_KEY',        'id=_%ozE>{>I]Q&hrAO_b+Kj(ePdN<q|kXNX4%#fku]%ES;t H/M[{cR37pmO@X;');
define('AUTH_SALT',        '9C{,Q)2;XBN-+bM_V6pfTh5{)69I+1uXXq8>su8%|m}U(.5apwn8kAAR]@u<|X&K');
define('SECURE_AUTH_SALT', 'PFM+vB+?p%Uy&X=0Q,-9*D~2JDQxmrSlQ|~NDSXwT+|H=j$:j[?gQCO{nMH18v5V');
define('LOGGED_IN_SALT',   'S:8wYg-i7UaFFJ8|aM_AT]53Nr~fjPCY+%u!u-fL;+>OZ?IQ`k}t=_}DSGTTo&Hg');
define('NONCE_SALT',       '-Lz$RQ|-1eh#;J|#nV}1{BS*xhRU2G^n^fb8x%${ZJvrmdW-I6^)0_ZDx<m,! G(');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
