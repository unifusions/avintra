<x-guest-layout>

     <x-page-header>
          <x-slot:heading> {{ __('Divisions') }} </x-slot:heading>
          <div class="col-lg-12">
              <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                      <li><a href="{{ route('home') }}">Home</a> </li>
                      <li><a href=""> Divisions</a></li>
                      <li class="active">{{ $division->name }}</li>
                  </ul>
              </div>
          </div>
      </x-page-header>

      <div class="container my-5">
          <div class="row gx-xl-5">
               <div class="col-lg-8">
                    {{ $division->documents }}
               </div>
          </div>
      </div>
</x-guest-layout>