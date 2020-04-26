<?php

	/**
	* Mapear la url ingresada de la sig forma:
	*  1. Controlador
	*  2. Metodo
	*  3. Parametro
	* Ej: /articulos/actualizar/17
	*/


	class Core{
		// Configuaracion por defecto (cuando no se especifique metodo o parametro en la url):
		protected $controladorActual = 'pages';
		protected $metodoActual = 'index';
		protected $parametros = [];

		public function __construct(){
			$url = $this -> getUrl();

			// Verificar 1ra parte de la url, el controlador (url[0])
			if(file_exists('../app/controllers/' . ucwords($url[0]).'.php')){ // si existe el controlador
				// Se configura como controladorActual
				$this-> controladorActual = ucwords($url[0]);
				// desmontar indice
				unset($url[0]);
			}
			// requerir el controlador actual
			$this->controladorActual = ucwords($this->controladorActual);
			require_once '../app/controllers/' . $this -> controladorActual . '.php';
			$this -> controladorActual = new $this -> controladorActual;


			// verificar la 2da parte de la url, es decir el metodo (url[1]) 
			if (isset($url[1])) { // Si se escribio un metodo en la url del navegador
				if (method_exists($this-> controladorActual, $url[1])) {
					$this -> metodoActual = $url[1]; // el metodo recibido pasa a ser el metodo actual.
					// desmontar metodo
					unset($url[1]);
				}
			}
			//echo $this -> metodoActual; para probar traer metodo

			// verificar la 3ra parte de la url, es decir el parametro (url[2])
			// Operador ternario: en caso de existir los parametros le pasamos el array de valores $url, en caso 
			// de que no; se pasa el arreglo vacio []
			$this -> parametros = $url ? array_values($url) : [];

			//  Callback para llamar el metodo con parametros
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

		}

		public function getUrl(){
			if(isset($_GET['url'])){
				// rtrim() para eliminar los espacios en la url.
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($_GET['url'], FILTER_SANITIZE_URL); 
				$url = explode('/', $url); // Divide $url por cada /. $url pasa a ser un arreglo
				return $url; // retorna el arrelgo url
			}
		}

	}