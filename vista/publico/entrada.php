<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Entrada | Two Door Cinema Club</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <header class="container-fluid c-header c-header--entrada align-items-center">
        <div class="row h-100">
            <div class="col-md-12 h-100 c-cabecera-wrapper">
                <div class="c-cabecera justify-content-center h-100">
                    <p class="categoria">Categoria</p>
                    <h1 class="titulo">Título entrada</h1>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light" id="MenuCategorias">
      <div class="container">
           <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Conciertos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lanzamientos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Eventos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Personal</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   <div class="container c-entrada">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 c-blog-contenido">
                        <div class="datos-post">
                            <div class="fecha"><span>23 mayo 2012</span></div>
                            <div class="autor"><span>· Por</span> <a href="">Laura Vicente</a></div>
                        </div>
                        <div class="contenido-post">
                            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. o sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos.</p>
                            <p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-entrada-comentarios">
        <div class="row justify-content-center">
                <div class="col-md-6 c-comentarios-wrapper">
                    <div class="row">
                        <div class="col-md-12 c-comentarios">
                            <h2 class="titulo">Comentarios</h2>
                            <div class="c-comentario">
                                <div class="row comentario comentario-padre">
                                    <div class="col-md-12">
                                        <p class="comentador">Nombre usuario</p>
                                        <span class="fecha-hora">12-04-18 12:34</span>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="contenido-comentario">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <div class="row comentario comentario-hijo">
                                    <div class="col-md-12">
                                        <p class="comentador">Nombre usuario</p>
                                        <span class="fecha-hora">12-04-18 12:34</span>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="contenido-comentario">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>