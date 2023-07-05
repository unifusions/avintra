{{-- Logos

<script type="module">
    
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
    center:true,
    autoplay: true,
    autoplayTimeout: 3000,
    
    items:1,
    autoplayHoverPause: true,
});


$('#retirementCarousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    center:true,
    autoplay: true,
    autoplayTimeout: 2000,
    
    items:1,
    autoplayHoverPause: true,
});

});
</script> --}}


<div id="footerCarousel" class="owl-carousel">
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/niclogo.jpg') }}" alt="">
    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/npi-logo.png') }}" alt="">
    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/mod-logo.gif') }}" alt="">
    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/defense-production-logo.jpg') }}" alt="">

    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/make-in-india-logo.jpg') }}" alt="">

    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/YIL-Logo.png') }}" alt="">

    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/aweil-logo.png') }}" alt="">

    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/munitions-logo.jpeg') }}" alt="">

    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/gil-logo.jpg') }}" alt="">

    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/tcl-logo.png') }}" alt="">
    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/gem-logo.png') }}" alt="">
    </div>
    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/public-grievances-logo.jpg') }}" alt="">
    </div>

    <div class="logo-slide">
        <img src="{{ asset('images/footer-logos/mpa_logo.png') }}" alt="">
    </div>
</div>


<footer class="footer mt-auto">
    <div class="container-fluid copyright-section py-2">
        <div class="container ">
            <div class="d-flex justify-content-between copyright align-items-center">
                <div class=""> &copy; {{ now()->year }}. All rights Reserved - Official Website of
                    Armoured Vehicles Nigam Limited</div>
                <div>
                    Visitors <span class="visitors-count">{{ number_format($app_visitors) }}</span>
                </div>
            </div>

        </div>

    </div>


    <div class="container-fluid py-3 bg-dark">
        <div class="container disclaimer-section text-white">This is the website of Armoured Vehicles Nigam Limited,
            developed with an
            objective to enable a single window access to information and services being provided by Armoured
            Vehicles
            Nigam Limited. The content in this website is the result of a collaborative effort of various units of
            Armoured Vehicles Nigam Limited. This website is designed and maintained by Armoured Vehicles Nigam
            Limited(AVNL), MoD, A Government of India Enterprise. Use of this site indicates that you accept the
            Terms
            of Use & Copyright policy of Armoured Vehicles Nigam Limited.</div>
    </div>


</footer>
