
import './bootstrap';
import 'bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
import 'owl.carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplaySpeed: 4000,

        autoWidth: true,
        margin: 25,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 8
            }
        }
    });
    
    // $('#liveToast').toast('show')

});

