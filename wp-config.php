<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '$C+PgL5FCv$o),Mx2QWY:Tg!fY|`JZFcBHUk[7ApD3}1^{;DcfJnO.%|]J:Yc!}~' );
define( 'SECURE_AUTH_KEY',  '(o`~Th2/.D_}:gw.vl S<NQG//2*J4<0Dl8pgd08%+5,X{BhbVFbm_-,*rqw.d2Y' );
define( 'LOGGED_IN_KEY',    'bFMBa/=##Z0SPTLXIdQb$D)s@-=I/CSbMZ,MQ-#T_DS34PfNnGqG{SjV/!|kD#SE' );
define( 'NONCE_KEY',        '*w?xh8<Ar5SyMoU{gQS2(>pts3AV _}]n8Vhn/mm*oUg8l|?wVzMR,#-W4<I?|;i' );
define( 'AUTH_SALT',        ':z^`haB)Ny%.P&Z>5PXBPQ Ltc/XtYnLc 8<=l5J?XVa:LH94bS{F~-5Be}=|Wb=' );
define( 'SECURE_AUTH_SALT', 'GSQ@iH/nfrD;a)XVRU$jpYt/^(EX-DS{>oWL?9i4emR/5l`ISa#7]9nA#9PTjwB-' );
define( 'LOGGED_IN_SALT',   '{EDN[||y/JEGNtu3LSs:^/74y4e:-X6[j-e2+.6Rt|PUs[0.C*k84rzmT=ThC5/[' );
define( 'NONCE_SALT',       '7ep!y<{c/n#MRy I.5Y#W%U^hwt`b!<3Dtq9i$v@pzqxS<YR#ACUCLzA4@2aPjuC' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);
define ('WP_CACHE', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
