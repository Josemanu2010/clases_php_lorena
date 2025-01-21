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

// Funciones principales para interactuar con PHP, PDO y DB
// prepare()
// bindParam()
// execute
$db = new Database;
$conn = $db->connectDB();
// $id = 2;
$nombre_producto = 'Jabón de baño';
$precio = 58;
$stock = 3;
$fcreate = date('Y-m-d');
// $query = "SELECT * FROM productos WHERE id = :id AND nombre_producto = :nombre_producto AND stock = :stock";
$query = "INSERT INTO productos (nombre_producto, precio, stock, productos_create) VALUES 
(:nombre_producto, :precio, :stock, :productos_create)";
$stmt = $conn->prepare($query);
$params = [
    ':nombre_producto' => $nombre_producto,
    ':precio' => $precio,
    ':stock' => $stock,
    ':productos_create' => $fcreate
];
$stmt->execute($params);
$productos = $stmt->fetchAll(PDO::FETCH_OBJ) ?? 'Sin resultados';

var_dump($productos);

// Class

// construc()

// connectDB()

// try { PDO  }




// TO DO
// Abrir sesión | session_start()
// Almacenar datos en sesión $_SESSION[] = '';
// Limpiar todos los datos o borrar datos específicos de la sesión
// Validación de sesiones con isset() y negación !
// Ejercicios de iniciar sesion, aplicando if, isset, header()
// Cerrar una sesión o desconectarse (3 funciones importantes)