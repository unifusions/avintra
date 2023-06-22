<x-guest-layout :title="'Home'">

    <div class="container-fluid g-0">
        <div class="row mb-4 g-0">
            <div class="col-md-9 col-xs-12">
                @include('homepage.carousel')
            </div>

            <div class="col-md-3 col-xs-12">
                @include('homepage.cmdmessage')
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">

        <div class="row mb-5">
            <div class="col-md-3 col-xs-12 mb-3">
                @include('homepage.news')
            </div>

            <div class="col-md-3 col-xs-12 mb-3">
                @include('homepage.word')
            </div>

            <div class="col-md-3 col-xs-12  mb-3">
                @include('homepage.documents')
            </div>

            <div class="col-md-3 col-xs-12 mb-3">
                <div class="row">
                    <div class="col-6">
                     @include('homepage.birthday')

                    </div>

                    <div class="col-md-6 ">

                       @include('homepage.retirements')
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
