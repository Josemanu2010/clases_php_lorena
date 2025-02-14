<?php
    require_once 'app/db.php';
    $db = new db;
    $conn = $db->connectDB();
    $query = 'SELECT * FROM persona';
    $res = $conn->query($query);
    var_dump($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        foreach($res as $r) {
            echo '<li>Coreo: '.$r['correo'].'</li> <br>';
        }
    ?>
    </ul>
    <h1>FUNCIONA</h1>
</body>
</html>
