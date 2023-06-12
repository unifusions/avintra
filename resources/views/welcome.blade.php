<x-guest-layout :title="'Home'">

    <div class="container-fluid g-0">
        <div class="row mb-4 g-0">

            <div class="col-9">

             @include('homepage.carousel')

            </div>
            <div class="col-3">
               @include('homepage.cmdmessage')
        </div>
    </div>
    </div>
    <div class="container-fluid my-5">

        <div class="row mb-5">
            <div class="col-3">

                @include('homepage.news')

            </div>



            <div class="col-3">
                @include('homepage.word')
            </div>

            <div class="col-3">
                @include('homepage.documents')
            </div>

            <div class="col-3">
                <div class="row">
                    <div class="col-6">
                        <div id="birthDayCarousel" class="carousel slide" data-bs-ride="carousel">
                            <img src="{{ asset('images/bday-card.png') }}" alt="" height="100"
                                class="mt-2 mb-3 mx-auto d-block">
                            <div class="birthdaycarousel carousel-indicators">
                                <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                {{-- <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button> --}}
                            </div>
                            <div class="carousel-inner">

                                <div class="birthday-carousel-item carousel-item active">




                                    <div class="container">
                                        <div class="birthday-card">


                                            <svg class="bd-placeholder-img rounded-circle " width="100"
                                                height="100" xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">

                                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)">
                                                </rect>
                                            </svg>

                                            <h6 class="mt-3">Ravi R. Nair</h6>
                                            <p>Operation | Marketing</p>





                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#birthDayCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#birthDayCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="h-hidden">Next</span>
                                </button>
                            </div>

                        </div>

                    </div>

                    <div class="col-6">

                        <div id="retirementCarousel" class="carousel slide" data-bs-ride="carousel">
                            <img src="{{ asset('images/retirement-card.png') }}" alt="" height="100"
                                class="mt-2 mb-3 mx-auto d-block">
                            <div class="retirementCarousel carousel-indicators">
                                <button type="button" data-bs-target="#retirementCarousel" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                {{-- <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button> --}}
                            </div>
                            <div class="carousel-inner">

                                <div class="birthday-carousel-item carousel-item active">




                                    <div class="container">
                                        <div class="birthday-card">


                                            <svg class="bd-placeholder-img rounded-circle " width="100"
                                                height="100" xmlns="http://www.w3.org/2000/svg" role="img"
                                                aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"
                                                focusable="false">

                                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)">
                                                </rect>
                                            </svg>

                                            <h6 class="mt-3">Arjun Murthy</h6>
                                            <p>HR | Admin</p>





                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#birthDayCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#birthDayCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>





    </div>

    <div class="container-fluid py-5 gallery-container my-5" style="">
        @include('homepage.gallery')
    </div>

    {{-- Footer --}}

</x-guest-layout>
