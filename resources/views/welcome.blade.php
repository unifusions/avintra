<x-guest-layout :title="'Home'">

    <div class="container-fluid g-0">
        <div class="row mb-4 g-0">

            <div class="col-9">

                <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/1.jpg') }}" alt="" width="100%" height="100%"
                                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"
                                style=" object-fit: cover;">
                            {{-- <svg class="bd-placeholder-img" width="100%" height="100%"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                            </svg> --}}
                            {{-- <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1>Example headline.</h1>
                                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/2.jpg') }}" alt="" width="100%" height="100%"
                                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"
                                style=" object-fit: cover;">

                            {{-- <div class="container">
                                <div class="carousel-caption">
                                    <h1>Another example headline.</h1>
                                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/7.jpg') }}" alt="" width="100%" height="100%"
                                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"
                                style=" object-fit: cover;">
                            {{-- <div class="container">
                                <div class="carousel-caption text-end">
                                    <h1>One more for good measure.</h1>
                                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-3">
                <section style="background:#F7EDE2;color:#000" class="h-100 p-5">
                    <div class="d-flex justify-content-between align-items-center">

                        <h3 class="">Message from the CMD</h3>
                        <img src="{{ asset('images/cmd-sk1.png') }}" alt="" width="125" height="125"
                            class="rounded-circle" style="object-fit:cover">
                    </div>
                    <div>

                        <div style="font-weight:500">Shri. A.N. Srivastava</div>
                        <div>CHAIRMAN & MANAGING DIRECTOR</div>
                    </div>


           

            <hr>
            <p class="cmd-message-text "> 
                Today I have taken over as CMD/AVL. I feel privileged & honoured to assume the charge of CMD of
                AVANI, one of the leading Defence Companies among the seven created recently. At the outset, let
                me place on record that the company has been very ably led by the Board of Directors for the
                past nine months since its formation. The last nine months have been extremely challenging as
                the newly formed Company had to transition from a group of Government units into a corporate
                entity. The challenge before us was to perform while we transformed. AVANI has performed
                creditably and is
                on the path of growth and profit. I congratulate all my fellow Avanians for their dedication and
                determined efforts to turnaround loss making units into a profitable concern.
            </p>
            <x-hyperlinkbutton href="{{ route('cmdmessage') }}" target="_blank">
                Read More
            </x-hyperlinkbutton>


            </section>
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

                                            <h6 class="mt-3">Full Name</h6>
                                            <p>Dept : </p>





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

                                            <h6 class="mt-3">Full Name</h6>
                                            <p>Finance | Technical</p>





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
