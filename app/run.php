<?php
	
	// Constantes info de la app; nombre del sitio, ruta, ...
	require_once 'config/config.php';



	// Autoload php - cargar TODAS las clases de la carpeta lib/ con una sola instruccion
	spl_autoload_register(function($nombreClase){
		require_once 'lib/' . $nombreClase . '.php';
	});

	
