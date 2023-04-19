<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Divisions & Sections') }}
        </h2>
    </x-slot>


    <div class="container">

        <div class="row">
            <div class="col-6">
                @foreach ($divisions as $user)
                    {{ $user->name }}
                @endforeach
            </div>

            <div class="col-6"></div>
        </div>  

    </div>
</x-app-layout>
