<?php 

// Path de las clases y de las paginas estandar
define("CLASS_PATH", dirname($_SERVER['PHP_SELF'])."/");
define("APPLICATION_PATH", dirname($_SERVER['PHP_SELF'])."/");

//Configuración de la conexion a la base de datos
define("BD_SERVIDOR", "mysql9.000webhost.com:3306");
define("BD_NOMBRE", "a5357087_pelis");
define ("BD_USUARIO", "a5357087_pelis");
define ("BD_PASSWORD", "aaa111!!!");

//Configuración de logitudes minimas del login y el password de los usuario
//normales
define ("LONGITUD_MINIMA_LOGIN", 6);
define ("LONGITUD_MINIMA_PASSWORD", 6);

//Configuración del numero de resultados de paginación por cada pagina
define ("PAGINACION", 10);

?>