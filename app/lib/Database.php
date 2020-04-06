<?php

    /**
     * DB connection class and execute SQL.
     * Uso de PDO para mayor seguridad.
     */
    class Database
    {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $db = DB_NAME;

        private $dbh;  # databse handler
        private $stmt;  # statement
        private $error;

        public function __construct()
        {
            # connection config
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            $options = array(
                PDO::ATTR_PERSISTENT => TRUE, # conex persistente
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION # modo de error de tipo excepcion
            );

            // Create PDO instance
            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
                $this->dbh->exec('set names utf8');  # para caracteres especiales
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function query($sql){
            $this->stmt = $this->dbh->prepare($sql); #prepara el sql
        }

        public function bind($param, $value, $type = null){
            if (is_null($type)) { 
                switch (true) { # define como tratara a la variable
                    case is_int($value):
                        $type = PDO::PARAM_INT; #como int
                        break;
                    case is_bool($value):
                        $type = PDO::PARAM_BOOL; #bool
                        break;
                    case is_null($value):
                        $type = PDO::PARAM_NULL; #null
                        break;    
                    default:
                        $type = PDO::PARAM_STR; #string
                    break;
                }
            }
            $this -> stmt -> bindValue($param, $value, $type); # vincular la sentencia
        }

        public function execute(){ # ejecuta sql
            return $this -> stmt -> execute();
        }

        public function records(){ # obtener los registros
            $this -> execute();
            return $this -> stmt -> fetchAll(PDO::FETCH_OBJ);
        }

        public function record(){ # obtener un unico registro
            $this -> execute();
            return $this -> stmt -> fetch(PDO::FETCH_OBJ);
        }

        public function getRowCount(){ # contar registros del sql
            return $this -> stmt -> rowCount();
        }
    }
