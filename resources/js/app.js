
import './bootstrap';
import 'bootstrap';

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();
import 'owl.carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';


$(document).ready(function () {

    // Carousel Initialization
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        nav :false,
        // navText : ["",""],
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
       
        autoWidth: true,
        margin: 25,
        autoplayHoverPause:true,
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
    
    //Navbar Close

    
    // $('#liveToast').toast('show')

});

