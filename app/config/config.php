<?php

    /**
	* Encargado de configurar la ruta de la aplicacion, titulo de 
	* la aplicacion dinamicamente...
	*/

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'mvc_app');

	// Ruta de la aplicación (app/) como constante:
	// __FILE__ devuelve la ruta de este archivo 
	// dirname() sale al directorio anterior
	// define para crear constante de nombre RUTA_APP
	define('RUTA_APP',dirname(dirname(__FILE__)));  // imprimiento la ruta hasta carpeta_proy/app

	// Ruta url de la aplicacion como constante
	define('RUTA_URL', 'http://localhost/mvc_app');

	define('NOMBRE_APP', 'MVC App');