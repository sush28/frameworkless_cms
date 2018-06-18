
<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="MenuCMS">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="index.php">Gestor de contenidos</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#MenuCMSResp" aria-controls="MenuCMSResp" aria-expanded="false" aria-label="Menú Principal">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="MenuCMSResp">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="DropdownBlog" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
            <div class="dropdown-menu" aria-labelledby="DropdownBlog">
                <a class="dropdown-item" href="index.php?apartado=privado&controlador=blog&accion=mostrarEntradas">Entradas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?apartado=privado&controlador=categorias&accion=mostrarCategorias">Categorías</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?apartado=privado&controlador=tour&accion=mostrarConciertos">Tour</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?apartado=privado&controlador=galeria&accion=mostrarGaleria">Galería</a>
        </li>
      </ul>
    </div>
    <div class="dropdown">
      <button type="button" class="dropdown-toggle" id="DropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="usuario"><i class="fas fa-user"></i></button>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="DropdownUser">
          <p class="dropdown-header">Nombre de usuario</p>
          <a class="dropdown-item" href="index.php?apartado=privado&controlador=usuarios&accion=mostrarUsuarios">Gestión de usuarios</a>
          <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt" aria-hidden="true"></i> Salir</a>
      </div>
    </div>
  </div>
</nav>

