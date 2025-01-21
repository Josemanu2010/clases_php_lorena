<?php

// PDO
class Database
{

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'sistema_crud';
    private $engine = 'mysql';
    private $charset = 'UTF8';
    private $conn;

    public function __construct() {}

    public function connectDB()
    {
        // PDO (mysql:host=localhost; dbaname=db; charset=UTF8, user=root, pass=)
        try {
            $dsn = "$this->engine:host=$this->host;dbname=$this->dbname; charset=$this->charset";
            $this->conn = new PDO($dsn, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo 'Conexión satisfactoria';
            return $this->conn;
        } catch (PDOException $e) {
            die('Error en la conexión de tipo: ' . $e->getMessage());
        }
    }
}
