// Animations
AOS.init();

// Lazyload
var lazyLoadInstance = new LazyLoad();

/* SCROLL TO SHOW MENU */
$(function(){
    $(window).scroll(function(){
        
        if($(this).scrollTop()>=200){

            if(!$('.navbar').hasClass('scrolled'))
            {
                $('.navbar').addClass('scrolled');
            }

        }
        else
        {

            if($('.navbar').hasClass('scrolled'))
            {
                $('.navbar').removeClass('scrolled');
            }

        }

    });

    website.slider();

    website.filters();
});

website = {
    
    slider: function()
    {
        if($('.owl-productos').length)
        {
            $('.owl-productos').owlCarousel({
                loop:true,
                dots:true,
                nav: false,
                autoplay: true,
                autoplayTimeout: 5000,
                items: 1,
                animateIn: 'fadeIn', // add this
                animateOut: 'fadeOut', // and this
                responsive:{
                    0:{
                        touchDrag: true,
                        mouseDrag: true
                    },
                    767:{
                        touchDrag: false,
                        mouseDrag: false
                    },
                }
            });
        }

        if($('.owl-supermercados').length)
        {
            $('.owl-supermercados').owlCarousel({
                loop:true,
                dots:false,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                items: 4,
                responsive:{
                    0:{
                        touchDrag: true,
                        mouseDrag: true,
                        items: 1,
                    },
                    767:{
                        touchDrag: false,
                        mouseDrag: false,
                        items: 4,
                    },
                }
            });
        }
    },

    filters: function()
    {
        $('.listaFiltros a').click(function()
        {
            var filtro      = $(this).attr('data-filter');

            $('.listaFiltros a').removeClass('filtroActivo');
            $(this).addClass('filtroActivo');

            $('.grillaProducto').hide();
            $('.grillaProducto.' + filtro).fadeIn();

            document.getElementById("productos").scrollIntoView();

        });
    }

}

function compruebaAceptaCookies() {
    if(localStorage.aceptaCookies != 'true'){
        $('#cookies').css('display','block');
    }
}

function aceptarCookies() {
    localStorage.aceptaCookies = 'true';
    $('#cookies').css('display','none');
}

$(document).ready(function () {
    compruebaAceptaCookies();
});