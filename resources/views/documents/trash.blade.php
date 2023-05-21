<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Trash Bin') }}
        </h2>
    </x-slot>



    <x-card>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" width="3%">#</th>
                    <th scope="col">Document Name</th>
                    <th scope="col">Document No</th>
                    <th scope="col">Division & Section</th>
                    <th scope="col">Info</th>
                    
                    <th scope="col">Uploaded on</th>
                    <th scope="col">Deleted On</th>
                    <th scope="col" width="5%">Actions</th>

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
                            <span class="badge bg-secondary text-light">{{ $document->section->name ?? ''}}</span>
                        </td>
                        <td>
                            <x-file-info file_type="{{ $document->file_type }}"
                                file_size="{{ $document->file_size }}" />
           
           
                        </td>

                      
                        <td>
                            {{ $document->created_at->format('d-m-Y') }}


                        </td>
                        <td>
                         {{ $document->deleted_at->format('d-m-Y') }}


                     </td>
                        <td>
                            <div class="action-button-container d-flex justify-content-evenly align-items-center">
                              <x-model-restore-button href="{{ route('documents.restore' , $document->id) }}" />
                            
                                {{-- <x-delete-button action=" {{ route('documents.destroy', $document) }} " type="document"  /> --}}
                                <div class="action-buttons">
                                <a href="" class="btn btn-sm btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" width=20>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>

                                </a>
                                </div>
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
