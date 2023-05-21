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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-3">

            <div class="col">

                <div class="card rounded-0 border-0 galleryCard text-center">
                    <div class="leader-image-container ">
                        <img src="{{ asset('images/bod/bodImage1_0.png') }}" preserveAspectRatio="xMidYMid slice"
                            style=" object-fit: cover;" />
                    </div>
                    <div class="card-body px-0">
                        <div>
                            <h4 class="galleryTitle">Shri A. N. Srivastava</h4>
                            <p>CMD, AVNL</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col">

                <div class="card rounded-0 border-0 galleryCard text-center">
                    <div class="leader-image-container ">
                        <img src="{{ asset('images/bod/bodImage2.png') }}" preserveAspectRatio="xMidYMid slice"
                            style=" object-fit: cover;" />
                    </div>
                    <div class="card-body px-0">
                        <div>
                            <h4 class="galleryTitle">Shri. Sanjay Dwivedi</h4>
                            <p>Director/Operations</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">

                <div class="card rounded-0 border-0 galleryCard text-center">
                    <div class="leader-image-container ">
                        <img src="{{ asset('images/bod/bodImage3.png') }}" preserveAspectRatio="xMidYMid slice"
                            style=" object-fit: cover;" />
                    </div>
                    <div class="card-body px-0">
                        <div>
                            <h4 class="galleryTitle">Shri. C. Ramachandran
                            </h4>
                            <p>Director/Finance
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">

                <div class="card rounded-0 border-0 galleryCard text-center">
                    <div class="leader-image-container ">
                        <img src="{{ asset('images/bod/bodImage4.png') }}" preserveAspectRatio="xMidYMid slice"
                            style=" object-fit: cover;" />
                    </div>
                    <div class="card-body px-0">
                        <div>
                            <h4 class="galleryTitle">Shri. B. Pattanaik
                            </h4>
                            <p>Director/HR
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">

                <div class="card rounded-0 border-0 galleryCard text-center">
                    <div class="leader-image-container ">
                        <img src="{{ asset('images/bod/bodImage5.png') }}" preserveAspectRatio="xMidYMid slice"
                            style=" object-fit: cover;" />
                    </div>
                    <div class="card-body px-0">
                        <div>
                            <h4 class="galleryTitle">Shri. Shalabh Tyagi
                            </h4>
                            <p>Govt. Nominee Director</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</x-guest-layout>
