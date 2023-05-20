<x-guest-layout>
    <x-page-header>
        <x-slot:heading> {{ __($gallery->title) }} </x-slot:heading>
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

<div class="container mt-3 mb-3">
{{--      
     <h2>{{ $gallery->title }}</h2> --}}
     {{-- <p>{{ $gallery->description }}</p> --}}


     <div id="gallery-lightbox" class="row row-cols-1 row-cols-sm-2 row-cols-md-3" data-bs-toggle="modal"
     data-bs-target="#exampleModal">

     @foreach ($gallery->galleryimages as $key => $gi)
         <div class="col mb-3" data-bs-target="#carouselExample" data-bs-slide-to="{{ $key }}">
             <img class="" src="{{ asset('storage/' . $gi->image_path) }}" alt="First slide" />
         </div>
     @endforeach

 </div>
</div>
   


    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close m-0 p-3 text-white position-absolute right-0" data-bs-dismiss="modal"
            aria-label="Close">
            <span aria-hidden="true" style="color:000"> X </span>
        </button>
        <div class="modal-dialog modal-lg" bs-role="document">
            <div class="modal-content modal-lg bg-transparent">
                <div class="modal-body p-0">
                    <div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="false">
                        @foreach ($gallery->galleryimages as $key => $gi)
                            <div class="carousel-item {{ $key === 1 ? 'active' : '' }}">
                                <img class="img-fluid" src="{{ asset('storage/' . $gi->image_path) }}" alt="First slide" />
                            </div>
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>





</x-guest-layout>
