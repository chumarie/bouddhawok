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
define('DB_NAME', 'bouddhawok');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sC]MYby/V_[h,:8s><nc:8*e@g-z3tT4C}9c/, :4+MJ9=4Jz&~]Y$Nid#ec[4Ko');
define('SECURE_AUTH_KEY',  '-!~;F=`K)dwz/5Y5ZIX/m*gPqei,Q78&)WP;b?^}R/R<7#=hImt$<y$V!U0[]SNZ');
define('LOGGED_IN_KEY',    'C@^Ftd2$U,0X[sIe|QWS0Uw%NICS:$WP]=%W*f%.[:p,}16`i)!S*AX]45zoDzU:');
define('NONCE_KEY',        '(.JBYx#1q]-dbpHd@(VJgSoJ1ss=L<.Fp3%$A4B)pdn`{mFMM]|PIO>ta9j$Z(A~');
define('AUTH_SALT',        'iU@XDnNav?[pk_wi;Zi+,LA]Z/:5>A`<:B;gx8zF3G7nS%/*VQBg/yp AqE`sf.2');
define('SECURE_AUTH_SALT', 'J2Qg1ikk6[jX7?yq4ddt]_RI9#a]Hnl&T8sW{.r7,NEJww}()4Jn03d=4=t(z<o-');
define('LOGGED_IN_SALT',   'OL@f@O)%6])BB7_AbH*.*H0Qyu<)Ai/>/6!A{]]DwwsZ#SP:<JtH,<-O6I;paWn6');
define('NONCE_SALT',       'p7{GD$UM7o^mrZXK[7nuf=^`mnY?Q`2wf 62Ibvd1HqLA=`98pC}2DNP$xvB=U9s');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');