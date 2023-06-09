<x-guest-layout :title="'Documents & Downloads'">


    <x-page-header>
        <x-slot:heading> {{ __('Documents') }} </x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li class="active">Documents</li>
                </ul>
            </div>
        </div>
    </x-page-header>


    <div class="container my-5">
        <div class="row gx-xl-5">
            <div class="col-lg-8">






                @foreach ($documents as $document)
                    <article class="document-list border-bottom">

                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="created-date">{{ $document->created_at->format('d/M/y') }}</div>
                                <div class=mb-3>
                                    <h4 class=""> {!! $document->title !!}</h4>
                                    {{ $document->division->name ?? ''}}  <span class="badge bg-secondary text-light">{{ $document->section->name ?? '' }}</span>
                                </div>
                            </div>
                            <div>
                                <a class="document-link" href="{{ route('documents.single', $document) }}"
                                    target="_blank">
                                    <x-file-info file_type="{{ $document->file_type }}"
                                        file_size="{{ $document->file_size }}" />
                                </a>
                            </div>


                        </div>
                    </article>
                @endforeach







                <div class="mt-5">
                    {{ $documents->links() }}
                </div>
            </div>

            <div class="col-lg-4 col-md-8">
                <div class="">
                    <div class="border-bottom">
                        <form action="{{ route('publicdocuments') }}">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Search Documents" id="search"
                                    name="search" aria-label="Documents Search" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="submit" id="button-addon2"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6" width=20>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg></button>
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-widget">
                        <h4 class="sidebar-title">Divisions & Sections</h4>
                        <ul class="list-style-none">
                            @foreach ($divisions as $division)
                                @if (count($division->documents) > 0)
                                    <li class="border-bottom">
                                        <a href="{{ route('publicdivision', $division) }}"
                                            class="fw-medium ">{{ $division->name }}<span
                                                class="float-end">{{ count($division->documents) }}</span>
                                        </a>
                                        <ul class="list-style-none ms-3">
                                            @if (count($division->sections) > 0)
                                                @foreach ($division->sections as $section)
                                                @endforeach
                                                <li><a href="{{ route('publicdivision', $division)  }}">{{ $section->name }}<span
                                                            class="float-end">{{ count($section->documents) }}</span></a>
                                                </li>
                                            @endif
                                        </ul>
                                    </li>
                                @endif
                            @endforeach


                        </ul>
                    </div>





                </div>
            </div>


        </div>






    </div>


</x-guest-layout>
