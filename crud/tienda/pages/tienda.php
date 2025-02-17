<?php
    require_once '../app/config.php';
    require_once '../app/db.php';
    
    // creando objeto de la forma tradicional
    // $db = new db;
    // $conn = $db->connectDB();

    // Creando objeto con método estático
    $conn = db::connect();

    $query = 'SELECT * FROM productos';
    $res = $conn->query($query);
?>

    <?php require_once 'templates/header.php'; ?>
    <?php require_once 'templates/menu.php'; ?>

    <style>
        #p_f {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        #p_c {
            /* width: 22%; */
            margin-top: 2em;
        }
        #p_c img {
            width: 100%;
            object-fit: cover;
        }
    </style>

    <div class="container-fluid bg bg-primary text-white pt-5" style="height: 10em;">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">TIENDA</h1>
            </div>
        </div>
    </div>
    <!-- TAILWIND -->
    <div class="container my-5">
        <div id="p_f">
            <?php foreach ($res as $p) { ?>
                <div id="p_c">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= IMG.'producto.jpeg'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Producto: <?= $p['id']; ?></h5>
                            <strong class="card-text"><?= $p['nombre_producto']; ?></strong>
                            <p>Precio: <?= $p['precio'] ?></p>
                            <a href="#" class="btn btn-primary">Añadir al carrito</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <?php require_once 'templates/footer.php'; ?>
