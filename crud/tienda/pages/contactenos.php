<?php
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
                <h1 class="text-center">CONTÁCTENOS</h1>
            </div>
        </div>
    </div>

    <?php require_once 'templates/footer.php'; ?>