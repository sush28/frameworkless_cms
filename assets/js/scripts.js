
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