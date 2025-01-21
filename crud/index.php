<?php
require_once 'db.php';
$db = new Db;
$conn = $db?->conectDB();
$query = 'SELECT * FROM persona';
$personas = $conn->query($query);



// $personas->fetch_all();
// var_dump($personas);

session_start();
var_dump($_SESSION);

if ($_GET['cerrar_sesion'] === 'si') {
   echo 'Entró a la ejecución';
   session_start();
   session_unset();
   session_destroy();
   header('Location: practica_sesiones.php');
} else {
   echo 'No entró al cerrar sesión';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <title>Sistema CRUD</title>
</head>

<body>
   <main>

      <section>
         <h2>SE CREÓ EL PRODUCTO: <?= $_SESSION['name'] . ' CON PRECIO: ' . $_SESSION['precio']; ?></h2>
         <a href="?cerrar_sesion=si">Cerrar sesión</a>
      </section>

      <div class="container pt-5">
         <h1 class="text-center">SISTEMA DE GESTION DE PERSONAS</h1>
      </div>
      <section class="row">
         <div class="col-sm-8 border-1 mt-5">
            <!-- <span>CRUD DE PERSONAS</span> -->
            <table class="table">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Nombres</th>
                     <th>Correo</th>
                     <th>Teléfono</th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  while ($p = $personas->fetch_object()) {
                     echo '<tr>';
                     echo '<td>' . $p->id . '</td>';
                     echo '<td>' . $p->nombres . '</td>';
                     echo '<td>' . $p->correo . '</td>';
                     echo '<td>' . $p->telefono . '</td>';
                     echo '<td><a href="#" class="btn btn-primary">Consultar</td>';
                     echo '<td><a href="#" class="btn btn-success">Editar</td>';
                     echo '<td><a href="#" class="btn btn-danger">Eliminar</td>';
                     echo '</tr>';
                  }
                  ?>
               </tbody>
            </table>
         </div>
         <div class="col-sm-4">
            <!-- <span>INFORMACIÓN DE PRODUCTOS</span> -->
         </div>
      </section>
   </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>