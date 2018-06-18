<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tour | Gestor de contenido</title>
</head>
<body id="tour">
    <?php include 'includes/header.php'; ?> 

    <!-- Desplegable --> 
    <div class="container c-formulario c-formulario--tour">
        <div class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Tour</h1>
                </div>
            </div>
        </div>
        <div class="c-desplegable">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionTour" role="button" aria-expanded="false" aria-controls="creacionTour">Añadir tour</a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="creacionTour">
                                <form action="index.php?apartado=privado&controlador=tour&accion=crear" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="fecha">Fecha</label>
                                            <input class="form-control" type="date" name="fecha" id="fecha" required>
                                        </div> 
                                        <div class="form-group col-md-4">
                                            <label for="arena">Recinto</label>
                                            <input class="form-control" type="text" name="arena" id="arena" required>
                                            <small class="text-muted">(Ejemplo: Millenium Stadium).</small>

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="localizacion">Localización</label>
                                            <input class="form-control" type="text" name="localizacion" id="localizacion" required>
                                            <small class="text-muted">Inserta tanto la ciudad como el país (Ejemplo: Madrid, España).</small>
                                        </div>                                
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="disponibilidad">Disponibilidad</label>
                                            <select class="form-control" name="disponibilidad" id="disponibilidad">
                                                <option value="disponibles">A la venta</option>
                                                <option value="vendidas">Vendidas</option>
                                                <option value="disponible">Próximamente</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="puntoventa">Enlace del punto de venta</label>
                                            <input class="form-control" type="text" name="puntoventa" id="puntoventa"/>
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn btn-cms" type="submit" name="submit">Añadir fecha</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Listado --> 
    <div class="container c-tabla-cms c-tabla-cms--tour">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Fecha</th>
                                <th scope="col">Localización</th>
                                <th scope="col">Estadio</th>
                                <th scope="col">Disponibilidad</th>
                                <th scope="col">Punto de venta</th>
                                <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        foreach ($conciertos as $key => $concierto) {
                        ?>
                            <tr class="concierto">
                                <td><?php echo $concierto->fecha; ?></td>
                                <td><?php echo $concierto->localizacion; ?></td>
                                <td><?php echo $concierto->arena; ?></td>
                                <td><?php echo $concierto->disponibilidad;?></td>
                                <td><?php echo $concierto->puntoventa;?></td>
                                <td>
                                    <a href="index.php?apartado=privado&controlador=tour&accion=obtenerConciertoComoJSON&id=<?php echo $concierto->id; ?>" data-toggle="modal" data-target="#modificarConcierto" class="boton-modificar modificar"><i class="far fa-edit"></i> Editar </a>
                                    <a href="index.php?apartado=privado&controlador=tour&accion=borrar&id=<?php echo $concierto->id;?>" class="boton-eliminar eliminar"><i class="far fa-trash-alt"></i> Borrar</a>
                                </td>
                            </tr>
                            <?php 
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Encuesta tours --> 
    <div class="container c-tabla-cms c-tabla-cms--tour my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center">Encuesta de países</h2>
                <p class="lead text-center">Estos son los resultados de los países que más han votado para tener un concierto.</p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Posición</th>
                                <th scope="col">País</th>
                                <th scope="col">Votos</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($encuesta as $key => $valor) {
                                    ?>
                                    <tr>
                                        <td><?php echo ++$key; ?></td>
                                        <td><?php echo $valor['pais']; ?></td>
                                        <td><?php echo $valor['total']; ?></td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Modal --> 
    <div class="modal fade" id="modificarConcierto" tabindex="-1" role="dialog" aria-labelledby="modificarConciertoLabel" aria-hidden="true"  data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modificarConciertoLabel">Modificar concierto</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="form-container" class="container">
                    <form action="index.php?apartado=privado&controlador=tour&accion=modificar" method="post" enctype="multipart/form-data" id="form-modificar">
                        <input type="hidden" id="id-concierto" name="id-concierto" />
                        <div class="form-group">
                            <label for="modificar-fecha">Fecha</label>
                            <input class="form-control" type="date" name="modificar-fecha" id="modificar-fecha" required>
                        </div>  
                        <div class="form-group">
                            <label for="modificar-arena">Recinto</label>
                            <input class="form-control" type="text" name="modificar-arena" id="modificar-arena" required>
                            <small class="text-muted">(Ejemplo: Millenium Stadium).</small>
                        </div> 
                        <div class="form-group">
                            <label for="modificar-localizacion">Localización</label>
                            <input class="form-control" type="text" name="modificar-localizacion" id="modificar-localizacion" required>
                            <small class="text-muted">Inserta tanto la ciudad como el país (Ejemplo: Madrid, España).</small>
                        </div> 
                        <div class="form-group">
                            <label for="modificar-disponibilidad">Disponibilidad</label>
                            <select class="form-control" name="modificar-disponibilidad" id="modificar-disponibilidad">
                                <option value="Disponibles">A la venta</option>
                                <option value="Vendidas">Vendidas</option>
                                <option value="Proximamente">Próximamente</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="modificar-puntoventa">Enlace con el punto de venta</label>
                            <input class="form-control" type="text" name="modificar-puntoventa" id="modificar-puntoventa"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="submit-modificar">Modificar concierto</button>
            </div>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

</body>
</html>