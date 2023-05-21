<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Archive') }}
        </h2>
    </x-slot>


    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="">
            <x-text-input id="search" class="" :value="old('search')" type="text" name="search" required
                autocomplete="search" placeholder="Search Documents" />
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div class="flex-fill px-3">{{ __('Filter By') }}</div>
            <div class="flex-fill px-3">

                <select class="form-select" id="division" name="division">
                    <option selected>Select Division</option>

                    {{-- @foreach ($news_categories as $news_category)
                            <option value="{{ $news_category->id }}">{{ $news_category->name }}</option>
                        @endforeach --}}

                </select>

            </div>

            <div class="flex-fill px-3">

                <select class="form-select" id="division" name="division" disabled>
                    <option selected>Select Section</option>

                    {{-- @foreach ($news_categories as $news_category)
                                <option value="{{ $news_category->id }}">{{ $news_category->name }}</option>
                            @endforeach --}}

                </select>

            </div>

        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="px-3">


                <select class="form-select" id="sort_by" name="sort_by">
                    <option selected>Sort By</option>
                    <option value="">Recently Uploaded</option>
                    <option value="">Document Type</option>
                    {{-- @foreach ($news_categories as $news_category)
                                <option value="{{ $news_category->id }}">{{ $news_category->name }}</option>
                            @endforeach --}}

                </select>

            </div>

            <div class="">
                <a href="" class="btn btn-outline-danger btn-sm justify-content-between align-items-center">
                    <span class>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" width=20>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </span>
                    <span>
                        {{ __('Trash Bin') }}
                    </span>

                </a>

            </div>

        </div>
    </div>

    <x-card>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="2%">#</th>
                    <th scope="col" width="30%">Document Name</th>
                    <th scope="col" width="20%">Document No</th>
                    <th scope="col" width="15%">Division & Section</th>
                    <th scope="col" width="13%">Info</th>
                    <th scope="col" width="12">Uploaded On</th>
                    <th scope="col" width="3%">Actions</th>



                </tr>
            </thead>
            @if (count($documents) > 0)
                @include('documents.partials.datatable')
            @else
                <tbody>
                    <tr>
                        <td colspan="6">No documents in this archive.</td>
                    </tr>
                </tbody>
            @endif
            <tfoot>

            </tfoot>
        </table>

        <div class="mt-3">
            {{ $documents->links() }}
        </div>
    </x-card>


</x-app-layout>
