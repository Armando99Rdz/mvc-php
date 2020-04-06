<?php

    /**
	* Encargado de configurar la ruta de la aplicacion, titulo de 
	* la aplicacion dinamicamente...
	*/

	# datos de la BD
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'mvc_app');

	# Ruta de la aplicación (app/) como constante:
	# __FILE__ devuelve ruta de archivo actual 
	define('RUTA_APP',dirname(dirname(__FILE__)));  # imprimiento la ruta hasta carpeta_proy/app

	# Ruta url de la aplicacion como constante
	define('RUTA_URL', 'http://localhost/mvc_app');

	# Nombre del sitio
	define('NOMBRE_APP', 'MVC App');