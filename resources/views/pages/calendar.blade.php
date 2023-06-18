<x-guest-layout>
    <x-page-header>
        <x-slot:heading> {{ __('Calendar') }} </x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li class="active">Calendar</li>
                </ul>
            </div>
        </div>
    </x-page-header>
    @php
        
        $date = empty($date) ? \Carbon\Carbon::now() : \Carbon\Carbon::createFromDate($date);
        $startOfCalendar = $date
            ->copy()
            ->firstOfMonth()
            ->startOfWeek(\Carbon\Carbon::SUNDAY);
        $endOfCalendar = $date
            ->copy()
            ->lastOfMonth()
            ->endOfWeek(\Carbon\Carbon::SATURDAY);
        $dayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    @endphp
    {{-- <div class="container my-5">
     
        <div class="calendar">
            <div class="month-year">
               
                <span class="month"> {{ $date->format('M') }} </span>
                <span class="year">{{ $date->format('Y') }} </span>
            </div>
            <div class="days">
                @foreach ($dayLabels as $dayLabel)
                    <span class="day-label">{{ $dayLabel }} </span>
                @endforeach

                @while ($startOfCalendar <= $endOfCalendar)
                    @php
                        $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'dull' : '';
                        $extraClass .= $startOfCalendar->isToday() ? ' today' : '';
                    @endphp

                    <span class="day {{ $extraClass }}">
                        <div class="content">
                            <div>
                                {{ $startOfCalendar->format('d') }}
                            </div>



                        </div>
                        <div class="list-content">
                            @if (count($news) > 0)
                                @foreach ($news as $n)
                                    @if ($n->created_at->format('m') === $date->format('m'))
                                        @if ($n->created_at->format('d') === $startOfCalendar->format('d'))
                                            {{ $n->news_title }}
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </span>
                    @php
                        $startOfCalendar->addDay();
                    @endphp
                @endwhile
            </div>
        </div>
    </div> --}}


    <div class="container my-5">

        <div id="gallery-lightbox" class="row row-cols-1 row-cols-sm-4 row-cols-md-4" data-bs-toggle="modal"
            data-bs-target="#exampleModal">

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="0">
                <div class="month-year">
                    <span class="month">Jan</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/01.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="1">
                <div class="month-year">
                    <span class="month">Feb</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/02.jpg') }}" alt="Second slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="2">
                <div class="month-year">
                    <span class="month">Mar</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/03.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="3">
                <div class="month-year">
                    <span class="month">Apr</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/04.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="4">
                <div class="month-year">
                    <span class="month">May</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/05.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="5">
                <div class="month-year">
                    <span class="month">Jun</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/06.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="6">
                <div class="month-year">
                    <span class="month">Jul</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/07.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="7">
                <div class="month-year">
                    <span class="month">Aug</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/08.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="8">
                <div class="month-year">
                    <span class="month">Sep</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/09.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="9">
                <div class="month-year">
                    <span class="month">Oct</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/10.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="10">
                <div class="month-year">
                    <span class="month">Nov</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/11.jpg') }}" alt="First slide" />
            </div>

            <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="11">
                <div class="month-year">
                    <span class="month">Dec</span>
                    <span class="year">2023</span>
                </div>
                <img class="w-100" src="{{ asset('images/calendar/12.jpg') }}" alt="First slide" />
            </div>

          
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close m-0 p-3 position-absolute right-0 bg-transparent border-0 text-white"
            data-bs-dismiss="modal" aria-label="Close" style="z-index:777">
            <span aria-hidden="true"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    height="50" stroke-width="1" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
        </button>
        <div class="modal-dialog  modal-fullscreen " bs-role="document">
            <div class="modal-content  bg-transparent border-0">
                <div class="modal-body  p-0 ">

                    <div id="carouselExample" class="carousel slide carousel-fade h-100" data-bs-ride="false">
                        <div class="carousel-item h-100 active">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/01.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/02.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/03.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/04.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/05.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/06.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/07.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/08.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/09.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/10.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/11.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        <div class="carousel-item h-100">
                            <div class="d-flex h-100 align-items-center">
                                <img class="mx-auto d-block h-100" src="{{ asset('images/calendar/12.jpg') }}"
                                    style="object-fit: cover" alt="First slide" />
                            </div>
                        </div>

                        



                    </div>

                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="currentColor" class="w-6 h-6" height = "50">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>


                       

                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                            stroke="currentColor" class="w-6 h-6" height = "50">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    </div>

</x-guest-layout>
