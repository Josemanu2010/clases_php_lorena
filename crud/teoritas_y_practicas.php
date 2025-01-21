<?php
/*


// Funciones principales para interactuar con PHP, PDO y DB
// prepare()
// bindParam()
// execute
// $db = new Database;
// $conn = $db->connectDB();
// // $id = 2;
// $nombre_producto = 'Jabón de baño';
// $precio = 58;
// $stock = 3;
// $fcreate = date('Y-m-d');
// // $query = "SELECT * FROM productos WHERE id = :id AND nombre_producto = :nombre_producto AND stock = :stock";
// $query = "INSERT INTO productos (nombre_producto, precio, stock, productos_create) VALUES 
// (:nombre_producto, :precio, :stock, :productos_create)";
// $stmt = $conn->prepare($query);
// $params = [
//     ':nombre_producto' => $nombre_producto,
//     ':precio' => $precio,
//     ':stock' => $stock,
//     ':productos_create' => $fcreate
// ];
// $stmt->execute($params);

// $productos = $stmt->fetchAll(PDO::FETCH_OBJ) ?? 'Sin resultados';

// var_dump($productos);

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

// INICIAR LA SESIÓN
session_start();

// CREAR UNA SESIÓN
$_SESSION['username'] = 'Carlos2025';
$_SESSION['pass'] = '12345';
$_SESSION['email'] = 'Carlos2025@yopmail.com';
$_SESSION['tel'] = '34567543245';
$_SESSION['address'] = 'Av siempre viva 742';

echo '<br>Todos los datos de la sesion <br>';
var_dump($_SESSION);
echo '<br>';

echo '<br>Borramos solamente username de la sesion con unset() <br>';
unset($_SESSION['username']);
var_dump($_SESSION);
echo '<br>';

echo '<br>Borramos todos los registros almacenados en la sesión <br>';
session_unset();
var_dump($_SESSION);

echo '<br><br>';
$_SESSION['username'] = 'Carlos2025';
var_dump($_SESSION['username']);
$_SESSION['username'] = 'Pepe3000';
echo '<br><br>';
var_dump($_SESSION['username']);

*/
