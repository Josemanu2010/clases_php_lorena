<!-- Registrar por medio de un input un producto completo (nombre, sotck, precio, tiene_envios) -->


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">
                    Nombre producto:
                    <input type="text" name="name" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="">
                    Stock producto:
                    <input type="number" name="stock" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="">
                    Precio producto:
                    <input type="number" name="precio" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label for="">
                    Cuenta con envíos nacionales:
                    <select name="envios" id="" class="form-control">
                        <option selected disabled>Seleccionar</option>
                        <option value="SI">Si</option>
                        <option value="NO">No</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Registrar producto">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>