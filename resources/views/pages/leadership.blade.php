<x-guest-layout>


    <x-page-header>
        <x-slot:heading> Leadership </x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li class="active">Leadership</li>
                </ul>
            </div>
        </div>
    </x-page-header>


    <div class="container my-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
            @foreach ($leaders as $leader)
                <div class="col">

                    <div class="card rounded-0 border-0 galleryCard text-center" style="cursor: pointer;"
                        data-bs-toggle="modal" data-bs-target="#{{ $leader->id }}">
                        <div class="leader-image-container ">
                            <img src="{{ asset('storage/' . $leader->image_path) }}"
                                preserveAspectRatio="xMidYMid slice" style=" object-fit: cover;" />
                        </div>
                        <div class="card-body px-0">
                            <div>
                                <h4 class="galleryTitle">{{ $leader->name }}</h4>
                                <p>{{ $leader->designation }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="{{ $leader->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Director Profile</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="d-flex align-items-center gap-3 mb-3">
                                        <img src="{{ asset('storage/' . $leader->image_path) }}"
                                            preserveAspectRatio="xMidYMid slice" style=" object-fit: cover;"
                                            height="150" />
                                        <div>
                                            <h4 class="galleryTitle">{{ $leader->name }}</h4>
                                            <div>{{ $leader->designation }}</div>
                                            <div class="border-top border-bottom  mt-2 py-2 text-muted d-flex gap-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6" height="20">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                                </svg>
                                                <span class="">
                                                    {{ $leader->email }}
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border-top pt-3 px-3">
                                        <h6>Bio</h6>
                                        <p class="text-justify ">
                                           
                                            {!! $leader->bio !!}
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach









        </div>
    </div>

</x-guest-layout>
