<x-guest-layout :title="'Documents'">
    <x-slot name="header">
        <x-breadcrumb />
        <h2 class="">
            {{ __('Documents & Downloads') }}
        </h2>

    </x-slot>

    <div class="container my-5">
        @foreach ($documents as $document)
            
                <div class="d-flex justify-content-between align-items-center mb-3 border-bottom">
                    {{ $document->title }}
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="30">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                          </svg>
                          
                    </div>
                </div>
               
            
        @endforeach
        <div class="mt-5">
            {{ $documents->links() }}
        </div>

    </div>


</x-guest-layout>
