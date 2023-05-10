<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Documents') }}
        </h2>
    </x-slot>




    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="">
            <form method="get" action="{{ route('documents.index') }}" class="d-flex gap-2">
                <x-text-input id="search" class="pr-3" :value="old('search')" type="text" name="search" required
                    autocomplete="search" placeholder="" />
                <x-primary-button class=" btn-sm">
                    {{ __('Search Documents') }}
                </x-primary-button>
            </form>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div class="flex-fill px-3">{{ __('Filter By') }}</div>
            <div class="flex-fill px-3">

                <select class="form-select" id="division" name="division">
                    <option selected>Select Division</option>

                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach

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
                <form id="sort_by_form" method="get" action="{{ route('documents.index') }}" class="d-flex gap-2" >
                    <select class="form-select" id="sort_by" name="sort_by" onchange='sort_by_form.submit()'>
                        <option selected>Sort By</option>
                        <option value="recency" {{ $sort_by === 'recency' ? 'selected="selected"' : '' }}>Recently Uploaded</option>
                        <option value="type"  {{ $sort_by === 'type' ? 'selected="selected"' : '' }} >Document Type</option>
                        
                    </select>
                    
                </form>

             

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
                    <th scope="col">#</th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Document No</th>
                    <th scope="col">Division & Section</th>
                    <th scope="col">Info</th>
                    <th scope="col">Uploaded By</th>
                    <th scope="col">Uploaded on</th>

                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($documents as $key => $document)
                    <tr>
                        <th scope="row">{{ $documents->firstItem() + $key }}</th>
                        <td>{{ $document->title }}</td>
                        <td>{{ $document->document_no }}</td>
                        <td>
                            <span class=""> {{ $document->division->name }} </span>
                            <span class="badge bg-secondary text-light">{{ $document->section->name }}</span>
                        </td>
                        <td>
                            <span class="badge bg-primary">
                                {{ $document->file_type }}</span>
                            @php
                                if ($document->file_size == 0) {
                                    return '0.00 B';
                                }
                                $s = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
                                $e = floor(log($document->file_size, 1024));
                                echo ' <span class="small">' . round($document->file_size / pow(1024, $e), 2) . ' ' . $s[$e] . '</span>';
                            @endphp

                        </td>

                        <td>{{ $document->user->name }}</td>
                        <td>
                            {{ $document->created_at->format('d/m/y, h:m') }}


                        </td>
                        <td>
                            <div class="d-flex justify-content-evenly">
                                <x-view-button href=" {{ route('documents.show', $document) }} "/>
                                <x-edit-button href=" {{ route('documents.edit', $document) }} " />
                                <x-delete-button href=" {{ route('documents.destroy', $document) }} " />
                               
                           
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>

            <tfoot>

            </tfoot>
        </table>

        <div class="mt-3">
            {{ $documents->links() }}
        </div>
    </x-card>


</x-app-layout>
