<?php

    /**
     * EXAMPLE MODEL to show use of Database class (lib/Database.php). 
     * Replace this class for model, use singular names.
     */

    class Model{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getContent(){ # se llamara desde el controlador
            $this->db->query("SELECT * FROM example_table"); # se prepara la consulta con query() de la clase lib/Database
            return $this->db->records(); # ejecuta la consulta en records() de la clase Database
        }
    }  