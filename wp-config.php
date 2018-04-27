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
define('DB_NAME', 'emma');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'yX%@T=$!SC[5EI.iv*GW!rQK0|;03<T-Gzz]5UFv=uAFP=#5w6J>T9YY0J(4<jK!');
define('SECURE_AUTH_KEY', ']TuCx>0f}2i,WYqa)dY0Uq5FtwxwGYvtcuxuK=-.5SysPX2}8X@RE$9P{ta|&8PQ');
define('LOGGED_IN_KEY', 'lF=yn]sd*?,5kq/}B{gb~ ,fO9H=/xT/Ar|RfLjrh4(~D[xakiB*Sn=><!,p{l6@');
define('NONCE_KEY', 'V?#b/9qg[A5FYhnep^Exvl.mu58i<!a,3;M?k<AwoVd^QJjMZm1z5,0d{#p~0@D?');
define('AUTH_SALT', 'i4p84jeD].-Vs:1TY*3X|:HML5+3 rIg|4%GVu@omz :;6gqd|.M<r2 Lcd2qzQ{');
define('SECURE_AUTH_SALT', 'I$fN|4qvErO9]?|%E|Y Ivaq%LX_Bep:>qJLuUH|X9]x;COF1/uE!wt:TBXNf+l=');
define('LOGGED_IN_SALT', 's~#`DSrz7quW7{h(2H//ufBj7GNbfWoZuBXcX>1eh[8wL;?KT;laYUm;a|#GB`K,');
define('NONCE_SALT', '<EDhCC+DbEK*o7acG{MF,Yb+qQ}e`4XojR&JH/1rjS{)mc7WLOWfd$$nbUWkHD%:');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

