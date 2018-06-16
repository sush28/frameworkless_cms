$(document).ready(function(){

    ClassicEditor
    .create( document.querySelector( '#creacionEntrada #entrada' ) )
    .catch( error => {
        console.error( error );
    } ); 

});