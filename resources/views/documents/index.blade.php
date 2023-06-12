<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Documents') }}
        </h2>
        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('documents.create') }}">New Document</x-hyperlinkbutton>
        </div>

    </x-slot>


{{-- <livewire:documentsearch /> --}}

    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="">
            <form method="get" action="{{ route('documents.index') }}" class="d-flex gap-2">

                <x-text-input id="search" class="" :value="old('search', $search)" type="text" name="search" required
                    autocomplete="search" placeholder="" style="min-width:200px" />
                <x-primary-button class=" btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6" height="20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                </x-primary-button>
            </form>
        </div>

        <div class="d-flex ">
            <form id="filter_by_ds" method="get" action="{{ route('documents.index') }}"
                class="d-flex align-items-center gap-2">
                <div class="flex-fill">{{ __('Filter By') }}</div>
                <div class="flex-fill">

                    <select class="form-select" id="division_id" name="division">
                        <option @empty($division_id) selected @endempty>Select Division</option>

                        @foreach ($divisions as $division)
                            <option value="{{ $division->id }}"
                                @if (!empty($division_id)) {{ $division->id == $division_id ? 'selected' : '' }} @endif>
                                {{ $division->name }}</option>
                        @endforeach

                    </select>

                </div>
                
                <script type="module">
                $(document).ready(function(){
                    $('#division_id').on('change', function(){
                        var divisionId = this.value;
                        $('.spinner-div').addClass('d-flex');
                        $.ajax({
                            url: "{{url('/fetchSections')}}",
                            type: "POST",
                            data: {
                                division_id: divisionId,
                                _token: '{{csrf_token()}}'
                            },
                            dataType: 'json',
                            success: function (result) {
                                $("#section_id").removeAttr("disabled");
                                $('#section_id').html('<option value="">Select Section</option>');
                                $.each(result.sections, function (key, value) {
                                    $("#section_id").append('<option value="' + value
                                    .id + '">' + value.name + '</option>');
                                });
                            },
                            complete: function () {
                                $('.spinner-div').removeClass('d-flex');//Request is complete so hide spinner
                            }
                        });
                    });
                });
                
            </script>
                <div class="flex-fill">

                    <select class="form-select" id="section_id" name="section"
                        @empty($section_id) disabled @endempty onchange='filter_by_ds.submit()'>
                        <option selected value="">Select Section</option>
                        @empty($sections)
                        @else
                            @foreach ($sections as $section)
                                <option value="{{ $section->id }}" {{ $section->id == $section_id ? 'selected' : '' }}>
                                    {{ $section->name }}</option>
                            @endforeach
                        @endempty
                        {{-- <option value="{{ $news_category->id }}">{{ $news_category->name }}</option> --}}


                        {{-- @foreach ($news_categories as $news_category)
                                <option value="{{ $news_category->id }}">{{ $news_category->name }}</option>
                            @endforeach --}}

                    </select>


                </div>
                <div class="flex-fill">
                    <select class="form-select" id="document_category_id" name="document_category"
                        onchange='filter_by_ds.submit()'>
                        <option @empty($document_category_id) selected @endempty value="">Select Category
                        </option>

                        @foreach ($documentsCategories as $category)
                            <option value="{{ $category->id }}"
                                @if (!empty($document_category_id)) {{ $category->id == $document_category_id ? 'selected' : '' }} @endif>
                                {{ $category->category_title }}</option>
                        @endforeach

                    </select>
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-around align-items-center">
            <div class="px-3">
                <form id="sort_by_form" method="get" action="{{ route('documents.index') }}" class="d-flex gap-2">
                    <select class="form-select" id="sort_by" name="sort_by" onchange='sort_by_form.submit()'>
                        <option selected>Sort By</option>
                        <option value="recency" {{ $sort_by === 'recency' ? 'selected="selected"' : '' }}>Recently
                            Uploaded</option>
                        <option value="type" {{ $sort_by === 'type' ? 'selected="selected"' : '' }}>Document Type
                        </option>

                    </select>

                </form>



            </div>

            <div class="">
                <a href="{{ route('documents.trash') }}"
                    class="btn btn-outline-danger btn-sm justify-content-between align-items-center">
                    <span class>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" width=20>
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                    </span>
                    <span>
                        {{ __('Trash') }}
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
                    <th scope="col" width="20%">Document Name</th>
                    <th scope="col" width="20%">Document No</th>
                    <th scope="col" width="15%">Division & Section</th>
                    <th scope="col" width="10%">Category</th>
                    <th scope="col" width="10%">Info</th>
                    <th scope="col" width="15">Uploaded By</th>
                    <th scope="col" width="15">Uploaded On</th>
                    <th scope="col" width="3%">Actions</th>

                </tr>
            </thead>

            @empty($section)
                @include('documents.partials.datatable')
            @else
                @if (count($documents) > 0)
                    @include('documents.partials.datatable')
                @else
                    <tbody>
                        <tr>
                            <td colspan="6">No documents in this {{ $section->name }} section.</td>
                        </tr>

                    </tbody>
                @endif
            @endempty





            <tfoot>

            </tfoot>
        </table>

        <div class="mt-3">
            {{ $documents->links() }}
        </div>
    </x-card>


    {{-- @livewireScripts --}}
</x-app-layout>
