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
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'db775479115');

/* Utilisateur de la base de données MySQL. */
define('DB_USER', 'dbo775479115');

/* Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpress_chalet');

/* Adresse de l’hébergement MySQL. */
define('DB_HOST', 'db775479115.hosting-data.io');

/* Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/* Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', 'utf8_general_ci');

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
define('AUTH_KEY', 'z(fXn,)Yqsj=Ov5!viT@%%>i:1,/w7,axr,*58CxIo~W+}*Jt3$vSE+?,5oOr(@e');
define('SECURE_AUTH_KEY', 'oNZOdC5|X!Wt<nD2F/V6Ju~Gbp1-MqLm t7u#!WR<t#lf($G+UZkNL{>ys8ECJ8d');
define('LOGGED_IN_KEY', 'ZkCb:&o=#Ls?fbQ.sUh3u V.kR2pcmrD6_}#q:if6dCR<2ET4v Pg|r55l*N]>,T');
define('NONCE_KEY', '_ox[s%pdDR{J@,<.&%?2r$?BtntIb_&En+8=%3^2HSp#];yIPu0RLVl kr/xlx}(');
define('AUTH_SALT', 'j=%A!$3D<TROpQcA<)B^.afbWnjgsMq56(}Dm<LUyPFjNt]=n:W4o}|a_OJ)qp;f');
define('SECURE_AUTH_SALT', ')5jN&gk4FTy<b>yV1h:og<[_M/%Xvs]+d3@dsbSL!yV_tDaZ]bHDJ1N[PFI9R3<q');
define('LOGGED_IN_SALT', '.B%+E):gH>/pLoIq5o6f}[3Ad_TP]|5|*6(h;_G;uc-S4}k:.Dr>dT(G6WaIHmj}');
define('NONCE_SALT', 'q@`td6Haj?9[0^Y(dU4Pn-/eT&~Yg0hrSDY.A=lL>hA@~JIml$V#M98(oQ[p?[8^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/*
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

define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! */

/* Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once ABSPATH.'wp-settings.php';
