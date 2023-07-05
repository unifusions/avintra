{{-- <div id="birthDayCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="birthdaycarousel carousel-indicators"> --}}
     
        {{-- <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="1"
             aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#birthDayCarousel" data-bs-slide-to="2"
             aria-label="Slide 3"></button> --}}
    {{-- </div> --}}
    {{-- <div class="carousel-inner">
        @foreach ($birthdays as $key => $birthday)
       
            <div class="birthday-carousel-item carousel-item {{ $key === 1 ? 'active' : '' }}">
                <div class="container">
                    <div class="birthday-card">
                         
                
                        <img src="{{ asset('storage/employees/' . $birthday->emp_id . '.jpg') }}" width="100px"
                        height="100px" aria-hidden="true" preserveAspectRatio="xMidYMid slice"  class="rounded-circle"
                        focusable="false" style=" object-fit: cover;"/>
                        <h6 class="mt-3">{{  $birthday->name }}</h6>
                        <p>Operation | Marketing</p>
                    </div>
                </div>
            </div>
        @endforeach
        <button class="carousel-control-prev" type="button" data-bs-target="#birthDayCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#birthDayCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="h-hidden">Next</span>
        </button>
    </div> --}}

{{-- </div> --}}

{{-- <img src="{{ asset('images/bday-card.png') }}" alt="" height="100" class="mt-2 mb-3 mx-auto d-block">

<div id="retirementCarousel" class="owl-carousel">

    @foreach ($retirements as $key => $retirement)
        <div class="birthday-carousel-item ">
            <div class="birthday-card">
                <img src="{{ asset('storage/employees/' . $retirement->emp_id . '.jpg') }}"  height="100"
                    aria-hidden="true" preserveAspectRatio="xMidYMid slice" class="rounded-circle text-center" focusable="false"
                    style=" object-fit: cover;width:100px!important; display:inline" style=""/>
                <h6 class="mt-3">{{ $retirement->name }}</h6>
                <p>{{ $retirement->division->name ?? '' }} | {{ $retirement->section->name ?? ''}}</p>
            </div>

        </div>
    @endforeach


</div> --}}
