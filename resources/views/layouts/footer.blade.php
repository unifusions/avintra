{{-- Logos --}}


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
