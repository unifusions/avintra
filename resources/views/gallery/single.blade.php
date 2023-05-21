<x-guest-layout>
    <x-page-header>
        <x-slot:heading> {{ __('Gallery') }} </x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li><a href="{{ route('publicgallery') }}">Gallery</a> </li>
                    <li class="active">{{ $gallery->title }}</li>
                </ul>
            </div>
        </div>
    </x-page-header>






    <style>
        .modal button.close {
            right: 0;
            outline: 0;
        }

        #gallery-lightbox img {
            height: 350px;
            width: 100%;
            object-fit: cover;
            cursor: pointer;
        }

        #gallery-lightbox img:hover {
            opacity: 0.9;
            transition: 0.5s ease-out;
        }
    </style>

    <div class="container  my-5">
        {{--      
     <h2>{{ $gallery->title }}</h2> --}}
        {{-- <p>{{ $gallery->description }}</p> --}}

        <h3 class="mb-5"> {{ $gallery->title }}</h3>
        <div id="gallery-lightbox" class="row row-cols-1 row-cols-sm-2 row-cols-md-3" data-bs-toggle="modal"
            data-bs-target="#exampleModal">

            @foreach ($gallery->galleryimages as $key => $gi)
                <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="{{ $key }}">
                    <img class="" src="{{ asset('storage/' . $gi->image_path) }}" alt="First slide" />
                </div>
            @endforeach

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
                        @foreach ($gallery->galleryimages as $key => $gi)
                            <div class="carousel-item h-100 {{ $key === 0 ? 'active' : '' }}">
                                <div class="d-flex h-100 align-items-center">
                                    <img class="mx-auto d-block " src="{{ asset('storage/' . $gi->image_path) }}"
                                        style="object-fit: cover" alt="First slide" />
                                </div>

                            </div>
                        @endforeach
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
