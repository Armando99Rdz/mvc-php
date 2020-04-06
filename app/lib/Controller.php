<?php


	/**
	 *  Control principal. Todos los demas controladores deben heredar/extender de este controlador
	 *  Encargado de cargar los modelos y las vistas
	 */
	class Controller{
		
		function __construct(){
			
		}

		public function model($model){ # carga e intancia el modelo
			# carga el modelo
			require_once '../app/models/' . $model . '.php';
			# instancia el modelo
			return new $model();

		}

		# cargar la vista y pasarle datos
		public function view($view, $data = []){
			if(file_exists('../app/views/' . $view . '.php')){ # verificar el archivo vista existe en views/
				require_once '../app/views/' . $view . '.php'; #
			}else{
				die('La vista no existe');
			}
		}
	}