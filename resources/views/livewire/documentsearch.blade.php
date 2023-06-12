{{-- <form method="get" action="{{ route('documents.index') }}" class="d-flex gap-2">

    <x-text-input id="search" class="" :value="old('search', $search)" type="text" name="search" required
        autocomplete="search" placeholder="" style="min-width:200px" />
    <x-primary-button class=" btn-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6" height="20">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
        </svg>

    </x-primary-button>
</form> --}}

<div style="text-align: center">
    <input type="text"
    class="form-control @error('search') is-invalid @enderror" id="search" wire:model="search">

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($documents) > 0)
                    @foreach ($documents as $document)
                        <tr>
                            <td>
                                {!! $document->title !!}
                            </td>
                           
                            <td>
                                {{-- <button wire:click="editPost({{$post->id}})" class="btn btn-primary btn-sm">Edit</button>
                                <button onclick="deletePost({{$post->id}})" class="btn btn-danger btn-sm">Delete</button> --}}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3" align="center">
                            No Posts Found.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    {{ $documents->links() }}
   
</div>

