<div class="container">
    <div class="section-heading d-flex justify-content-between align-items-center mb-3">

        <div class="d-flex align-items-center">
            <div class="heading-icon me-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="#fff"
                    height=50 width=50>
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </div>

            <h3 class="section-heading flex-grow-1"> {{ __('Gallery') }}</h3>


        </div>


        <div>
            <x-hyperlinkbutton href="{{ route('publicnews') }}" class="" :outline="true">
                All Gallery <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                    stroke="currentColor" width="20">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </x-hyperlinkbutton>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @if (count($galleries) > 0)
            @foreach ($galleries as $gallery)
                <div class="col">
                    <a href="{{ route('gallery.single', $gallery) }}" class="galleryLink">
                        <div class="card rounded-0 border-0 galleryCard">
                            <div class="galleryImageContainer">
                                <img src="{{ asset('storage/' . $gallery->featured_image) }}"
                                    preserveAspectRatio="xMidYMid slice" style=" object-fit: cover;" />
                            </div>


                            <div class="card-body px-0">

                                <div class="d-flex justify-content-between align-items-center">

                                    <h3 class="galleryTitle">{{ $gallery->title }}</h3>

                                    <div class="galleryLinkIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.25" stroke="currentColor" height="24">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                        </svg>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            @endforeach
        @else
            <div class="col">
                No galleries yet
            </div>
        @endif
    </div>

</div>
