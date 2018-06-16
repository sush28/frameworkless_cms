$(document).ready(function(){

    console.log("\n %c Hecho con ♥ por Buleboo Estudio %c %c 🐼  %c https://buleboo.es/ %c %c \n\n","color: #fff; background: #7ab31e; padding:5px 0;","background: #fff; padding:5px 0;","background: #fff; padding:5px 0;","color: #fff; background: #1c1c1c; padding:5px 0;","background: #fff; padding:5px 0;","color: #7ab31e; background: #fff; padding:5px 0;");

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

    /* MENU POSICION SEGUN STICKY */
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


    /* BOTON PARA IR HACIA ARRIBA DE LA PAGINA (Codigo de CodyHouse.co) */
    (function(){
        // Back to Top - by CodyHouse.co
        var backTop = document.getElementsByClassName('to-top-js')[0],
            // browser window scroll (in pixels) after which the "back to top" link is shown
            offset = 300,
            //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
            offsetOpacity = 1200,
            scrollDuration = 700
            scrolling = false;
        if( backTop ) {
            //update back to top visibility on scrolling
            window.addEventListener("scroll", function(event) {
                if( !scrolling ) {
                    scrolling = true;
                    (!window.requestAnimationFrame) ? setTimeout(checkBackToTop, 250) : window.requestAnimationFrame(checkBackToTop);
                }
            });
            //smooth scroll to top
            backTop.addEventListener('click', function(event) {
                event.preventDefault();
                (!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
            });
        }
    
        function checkBackToTop() {
            var windowTop = window.scrollY || document.documentElement.scrollTop;
            ( windowTop > offset ) ? addClass(backTop, 'to-top--visible') : removeClass(backTop, 'to-top--visible', 'to-top--semivisible');
            ( windowTop > offsetOpacity ) && addClass(backTop, 'to-top--semivisible');
            scrolling = false;
        }
        
        function scrollTop(duration) {
            var start = window.scrollY || document.documentElement.scrollTop,
                currentTime = null;
                
            var animateScroll = function(timestamp){
                if (!currentTime) currentTime = timestamp;        
                var progress = timestamp - currentTime;
                var val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
                window.scrollTo(0, val);
                if(progress < duration) {
                    window.requestAnimationFrame(animateScroll);
                }
            };
    
            window.requestAnimationFrame(animateScroll);
        }
    
        Math.easeInOutQuad = function (t, b, c, d) {
             t /= d/2;
            if (t < 1) return c/2*t*t + b;
            t--;
            return -c/2 * (t*(t-2) - 1) + b;
        };
    
        //class manipulations - needed if classList is not supported
        function hasClass(el, className) {
              if (el.classList) return el.classList.contains(className);
              else return !!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
        }
        function addClass(el, className) {
            var classList = className.split(' ');
             if (el.classList) el.classList.add(classList[0]);
             else if (!hasClass(el, classList[0])) el.className += " " + classList[0];
             if (classList.length > 1) addClass(el, classList.slice(1).join(' '));
        }
        function removeClass(el, className) {
            var classList = className.split(' ');
              if (el.classList) el.classList.remove(classList[0]);	
              else if(hasClass(el, classList[0])) {
                  var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
                  el.className=el.className.replace(reg, ' ');
              }
              if (classList.length > 1) removeClass(el, classList.slice(1).join(' '));
        }
    })();


    /* FANCYBOX PARA ZONA FAN */
    $('[data-fancybox="zona-fan"]').fancybox({
        buttons : [
            'share',
            'thumbs',
            'close'
          ]
    });


    /* SLICK SLIDER - MENU CATEGORIAS */
  
    

});