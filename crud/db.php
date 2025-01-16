<?php

class Db
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'sistema_crud';
    private $conn;

    public function __construct() {}

    public function conectDB()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die('Hubo un error de conexión de tipo: ' . $this->conn->connect_error);
        }
        return $this->conn;
    }
}
