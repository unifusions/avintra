
import './bootstrap';
import 'bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
import 'owl.carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';

$(document).ready(function () {

    // Carousel Initialization
    $('#footerCarousel').owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        // navText : ["",""],
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,

        autoWidth: true,
        margin: 25,
        autoplayHoverPause: true,
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

    //Birthday Carousel

    $('#birthdayCarousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        center: true,
        autoplay: true,
        autoplayTimeout: 3000,
        items: 1,
        autoplayHoverPause: true
    });


    $('#retirementCarousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        center: true,
        autoplay: true,
        autoplayTimeout: 2000,
        items: 1,
        autoplayHoverPause: true
    });

});

