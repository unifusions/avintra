<x-guest-layout>

    <x-page-header>
        <x-slot:heading> {{ __('Gallery') }} </x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </x-page-header>




    <div class="container my-5">


        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($galleries as $gallery)
                <div class="col">
                    <div class="card shadow-sm  rounded-0">
                        <img src="{{ asset('storage/'.$gallery->featured_image) }}" width="100%" height="225"
                            preserveAspectRatio="xMidYMid slice" style=" object-fit: cover;"/>

                        <div class="card-body">
                            <h6>{{ $gallery->title }}</h6>
                            <p class="card-text">{{ $gallery->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href={{ route('gallery.single', $gallery) }} type="button"
                                        class="btn btn-sm btn-outline-primary">View</a>

                                </div>
                                <small class="text-body-secondary">{{ $gallery->created_at->format('d/M') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="mt-5">


        </div>
    </div>

</x-guest-layout>
