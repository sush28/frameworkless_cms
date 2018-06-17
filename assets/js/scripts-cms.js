$(document).ready(function(){

    ClassicEditor
    .create( document.querySelector( '#creacionEntrada #entrada' ) )
    .catch( error => {
        console.error( error );
    } );

    // Pagina de modificar entradas
    if ($('#entradas').length === 1) {
        var $formulario = $('#form-modificar');

        $('.boton-modificar').on('click', function(e) {
            var $link = $(e.target).parent().find('a');
            var url = $link.attr('href');

            // @link http://api.jquery.com/jquery.ajax/
            $.ajax({
                url: url,
                dataType: 'json',
                beforeSend: function( xhr ) {
                    // No hacer nada
                }
            }).done(function( data ) {
                // Rellenamos cada input del modal...
                
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

        $('#submit-modificar').on('click', function(e) {
            $formulario.submit();
        });
    }


});
