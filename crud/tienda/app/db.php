<?php

    require_once 'config.php';

    class db {

        private $host;
        private $user;
        private $pass;
        private $dbname;
        private $conn;

        public function __construct() {
            $this->host = HOST;
            $this->user = USER;
            $this->pass = PASS;
            $this->dbname = DBNAME;
        }

        public function connectDB() {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if ($this->conn->connect_error) {
                die('Error en la conexión a la base de datos');
            }
            return $this->conn;
        }

    }