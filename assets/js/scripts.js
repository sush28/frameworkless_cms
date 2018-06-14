
/* ISOTOPE - ZONA FAN */

$('.grid').isotope({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    horizontalOrder: true,
    percentPosition: true,
    masonry: {
        //columnWidth: '.grid-sizer',
        gutter: 15
    }
})

/* ISOTOPE - GALERIA */

$('.grid-galeria').isotope({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.grid-item',
    horizontalOrder: true,
    percentPosition: true,
    masonry: {
        //columnWidth: '.grid-sizer',
        gutter: 15
    }
})

$(document).ready(function(){

    var altomenu = $('#MenuPrincipal').outerHeight() + 25;

    $(window).scroll(function(){
        console.log($(window).scrollTop());
        console.log('alto menu: ' + altomenu);
        if($(window).scrollTop() > altomenu){
            console.log("es mas alto");
            $('#MenuPrincipal').addClass('is-fixed');

        }else{
            console.log("es menos alto");
            $('#MenuPrincipal').removeClass('is-fixed');
        }
    });


});