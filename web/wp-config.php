<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'db406255760');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'dbo406255760');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'panterarosa');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'db406255760.db.1and1.com');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'B6Ql2+=ppo@r7o^;(D>0<9gdw+-r#0AqwI,)1[urQ[5DM}3`kw~dw;*sOe`wj]oW'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '>64YhTAgIQ@)U^pi-*mV%{.Gt+{>DD.Eoswmdx|JyQVz1$KCh_;idD@3NQK@HG5D'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'J#zXH0CCqX*Tw=rJl_nqgv$5rr+&N8ar!9i)ND+,+jSf;b{yI)c&[d/Bn^;ef_59'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 's _2k(Y}>+!b_B=&VNd8+:#91IM:rJv!-+K!rSWa0yNG{R2a!o|Zi3G?iHyBc8 Y'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '.JB qn?Z1,-7DlJ-B S?$30hI|`f&p,d7tO?mKB^1M|ieRp(K!7W{49-b+7G<qW%'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '+GPEcr!rwe-.mO_5.lH_jlYe@@o5r:x.^v.& nF=y0zQzmJ?SYimr(T@AC;mPL|P'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'E/:<NP+d%;^askveYbe_^ ZU<n%j.a%,0;sFYf,l>gm97+H0-%_b#4Za9QeFV@pf'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '29znCGX*UExDFdU1_{^cO,[,dcFK_!pP5Z;`}fCf|+Yc@jk=1*=2[ue`$x.*d+>d'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_ac_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

