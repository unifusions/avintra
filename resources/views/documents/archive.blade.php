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
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=20>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                      </svg>
                                      
                                </a>
                                <a href="" class="text-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=20>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                      </svg>
                                      
                                </a>
                                <a href="" class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width=20>
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                      </svg>
                                      
                                </a>
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
