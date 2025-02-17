
<?php
    require_once '../app/config.php';
    require_once '../app/db.php';
    $db = new db;
    $conn = $db->connectDB();
    $query = 'SELECT * FROM persona';
    $res = $conn->query($query);
?>

    <?php require_once 'templates/header.php'; ?>
    <?php require_once 'templates/menu.php'; ?>

    <div class="container-fluid bg bg-primary text-white pt-5" style="height: 10em;">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Tareas por hacer</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <ul>
            <li>Crear archivo dentro de <kbd>pages/login.php</kbd> & <kbd>pages/registro.php</kbd></li>
            <li>Crear lógica de registro / conectar la DB, y mandar la info a la DB</li>
            <li>Formulario de registro de usuario: <kbd>username</kbd> <kbd>pass</kbd> <kbd>Roll</kbd> <kbd>Botón registrar</kbd></li>
            <li>Crear formulario Login: <kbd>username</kbd> <kbd>pass</kbd> <kbd>Botón iniciar sesión</kbd></li>
            <li>Crear estrcutura de sesiones para el usuario</li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <?php require_once 'templates/footer.php'; ?>