<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="<?= IMG; ?>codeagency_blue.png" width="120px">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="home" href="<?= URL; ?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="tienda" href="<?= PAGES.'tienda.php'; ?>">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="contact" href="<?= PAGES.'contactenos.php'; ?>">Contacto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="contact" href="<?= PAGES.'temario.php'; ?>">Temario</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Registro</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>