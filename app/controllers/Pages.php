<?php


	/**
	 * Pages hereda del controlador principal lib/Controller.php
	 */
	class Pages extends Controller{
		
		function __construct(){
			//echo 'Controller/Pages';
		}

		public function index(){
			$data = [
				'title' => 'Bienvenido a MVC App'
			];
			$this->view('pages/home', $data); // se le pasa el array de parametros($data) a la vista (home)
		}

		public function product(){
			//$this->view('pages/product');

		}

		public function update($id){
			echo 'Metodo update. ID = ' . $id;
		}
	}