<?php


	/**
	 *  Control principal. Todos los demas controladores deben heredar/extender de este controlador
	 *  Encargado de cargar los modelos y las vistas
	 */
	class Controller{
		
		function __construct(){
			
		}

		// cargar modelo
		public function model($model){
			// carga
			require_once '../app/models/' . $model . '.php';
			// instanciar modelo
			return new $model();

		}

		// cargar vista
		public function view($view, $data = []){
			// verificar si el archivo vista existe en la carpeta views/
			if(file_exists('../app/views/' . $view . '.php')){
				require_once '../app/views/' . $view . '.php';
			}else{
				// si el archivo de la vista no existe
				die('La vista no existe');
			}
		}
	}