<?php


	/**
	 * Pages hereda del controlador principal lib/Controller.php
	 */
	class Pages extends Controller{
		
		function __construct(){
			# ejemplo: carga e instancia el modelo 'Model'
			$this -> productModel = $this -> model('Model'); # model retorna instancia de 'Model'

		}

		public function index(){

			# ejemplo: obtener datos del modelo
			$products = $this -> productModel -> getContent(); # 

			$data = [
				'title' => 'Bienvenido a MVC App',
				'products' => $products # datos de ejemplo desde el modelo (array)
			];
			$this->view('pages/home', $data); # se le pasa el array $data a la vista (views/pages/home.php)
		}

		public function product(){ # funcion de ejemplo
			#$this->view('pages/product');

		}

		public function update($id){ # funcion de ejemplo actualizar
			echo 'Metodo update. ID = ' . $id;
		}
	}