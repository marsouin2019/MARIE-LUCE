<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dweb' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mRSMA' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J~Nf(bZJq8o-2;|ZSLbU%NQ>~&N|s#w6rP,kd~TeKr&y qt9PI/#W4-HRPk?.lGf' );
define( 'SECURE_AUTH_KEY',  'fwAo?67W&wCXzA9$u!aF{&97=iv7Ai?z?!}9mhb~T?g`~J|3K9xEmMZ>rI/8UxpR' );
define( 'LOGGED_IN_KEY',    '60zX[h t6v`Qhn!8}u,sxSNh_J@%+fteCIS{$$zL68soRLuL5y~x|Unh`B#wS;gG' );
define( 'NONCE_KEY',        'YYi3g@R!vG6{`37#o$K7>(A[V_OpM0O2EL6B6#],5jzjzg7XB)xE^Ct`LAb_2e[q' );
define( 'AUTH_SALT',        'Jc!L&?oG!b>`Ed]eFn#3{O#r_#2fkg]YJ}>2v%8nJnoz]}s&zGzL#&u6GgkS6*CU' );
define( 'SECURE_AUTH_SALT', '3wP(0feAIrH2 FK8&4<9Vb`v/{(TT?,S0u5]^BDl/UPhQ PJw#$}$Eukra?uWsA ' );
define( 'LOGGED_IN_SALT',   'P;P!*-MA@j)BexQ?WrCe#H.fQHb u*EVOE$o@~7E*6vW6f{/*O#dWhU(UDM],YuI' );
define( 'NONCE_SALT',       '#3OvAz.wlOsWkBIy^yd1Cau)rg)MM!B2z i(;ArEV~E|H~cv3[prW+KtW@s<$M#G' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'flow_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

