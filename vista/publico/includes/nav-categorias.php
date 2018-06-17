<nav class="navbar navbar-expand-lg navbar-light" id="MenuCategorias">
    <div class="container">
        <ul class="navbar-nav mx-auto">
            <?php
                foreach($categorias as $key => $categoria) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?apartado=publico&controlador=blog&accion=mostrarBlog&categoria=<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></a>
                        </li>
                    <?php
                }
            ?>
        </ul>
    </div>
</nav>
