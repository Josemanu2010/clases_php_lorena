<?php
require_once 'db.php';
$db = new Db;
$conn = $db?->conectDB();
$query = 'SELECT * FROM persona';
$personas = $conn->query($query);
// $personas->fetch_all();
// var_dump($personas);
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
      <div class="conatiner">
         <h1>SISTEMA DE GESTION DE PERSONAS</h1>
      </div>
      <section class="flex">
         <div class="">
            <span>CRUD DE PERSONAS</span>
            <table class="table">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Nombres</th>
                     <th>Correo</th>
                     <th>Teléfono</th>
                     <th>Consulatr</th>
                     <th>Editar</th>
                     <th>Eliminar</th>
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
                     echo '<td></td>';
                     echo '<td></td>';
                     echo '<td></td>';
                     echo '</tr>';
                  }
                  ?>
               </tbody>
            </table>
         </div>
         <div class="">
            <span>INFORMACIÓN DE PRODUCTOS</span>
         </div>
      </section>
   </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>