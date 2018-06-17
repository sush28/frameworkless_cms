$(document).ready(function(){

    /* CKEDITOR */
    ClassicEditor
    .create( document.querySelector( '#creacionEntrada #entrada' ) )
    .catch( error => {
        console.error( error );
    } );

    /* CONFIRMACION GENERICA DE BORRAR */
    $('.boton-eliminar').on('click', function(e) {
        if (!confirm('¿Seguro que quieres eliminar este elemento?\n Esta acción es permanente.')) {
            e.preventDefault();
        }
    });

    /* SUBMIT GENERICO */
    $('#submit-modificar').on('click', function(e) {
        $formulario.submit();
    });


    /* PAGINA DE ENTRADAS */
    if ($('#entradas').length === 1) {
        var $formulario = $('#form-modificar');

        /* Click en boton modificar */
        $('.boton-modificar').on('click', function(e) {
            var $link = $(e.target).parent().find('a');
            var url = $link.attr('href');

            // @link http://api.jquery.com/jquery.ajax/
            $.ajax({
                url: url,
                dataType: 'json'
            }).done(function( data ) {

                // Rellenamos cada input del modal con los datos de la entrada
                $formulario.find('#id-entrada').val(data.id);
                $formulario.find('#modificar-categoria').find("[value='" + data.id_categoria + "']").attr('selected', 'selected');
                $formulario.find('#modificar-titulo').val(data.titulo);
                $formulario.find('#modificar-altimagen').val(data.altimagen);
                $formulario.find('#modificar-entrada').val(data.contenido);

                $checkboxPublico = $formulario.find('#modificar-publico');
                if (data.publico === "0") {
                    $checkboxPublico.attr('checked', false);
                } else {
                    $checkboxPublico.attr('checked', true);
                }
            });
        });
    }

    /* PAGINA DE CATEGORIAS */
    if ($('#categorias').length === 1) {
        var $formulario = $('#form-modificar');

        // Click en boton modificar
        $('.boton-modificar').on('click', function(e) {
            var $link = $(e.target).parent().find('a');
            var url = $link.attr('href');
            // @link http://api.jquery.com/jquery.ajax/
            $.ajax({
                url: url,
                dataType: 'json'
            }).done(function( data ) {

                // Rellenamos cada input del modal con los datos de la categoria
                $formulario.find('#id-categoria').val(data.id);
                $formulario.find('#modificar-nombre').val(data.nombre);
            });
        });
    }

    /* PAGINA DE TOUR */
    if ($('#tour').length === 1) {
        var $formulario = $('#form-modificar');

        // Click en boton modificar
        $('.boton-modificar').on('click', function(e) {
            var $link = $(e.target).parent().find('a');
            var url = $link.attr('href');
            // @link http://api.jquery.com/jquery.ajax/
            $.ajax({
                url: url,
                dataType: 'json'
            }).done(function( data ) {

                console.log(data);

                // Rellenamos cada input del modal con los datos de la categoria
                $formulario.find('#id-concierto').val(data.id);
                $formulario.find('#modificar-fecha').val(data.fecha);
                $formulario.find('#modificar-arena').val(data.arena);
                $formulario.find('#modificar-localizacion').val(data.localizacion);
                $formulario.find('#modificar-disponibilidad').val(data.disponibilidad);
                $formulario.find('#modificar-puntoventa').val(data.puntoventa);
            });
        });
    }





});
