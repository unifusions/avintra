<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Galleries') }}
        </h2>

        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('gallery.create') }}">New Gallery</x-hyperlinkbutton>
        </div>
    </x-slot>


    <x-card>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gallery</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created on</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>



                @foreach ($galleries as $key => $gallery)
                    <tr class="align-middle">
                        <th scope="row">{{ $galleries->firstItem() + $key }}</th>
                        <td>

                            <div class="d-flex align-items-center">
                                {{-- <img src="" height="100" /> --}}

                                <img src="{{ asset('storage/' . $gallery->featured_image) }}" alt=""
                                    width="160px" height="90px" aria-hidden="true"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" style=" object-fit: cover;">





                                <div class="ms-3">{{ $gallery->title }}</div>




                        </td>

                        <td>{{ $gallery->description }}</td>


                        <td>
                            {{ $gallery->created_at->format('d/m/y, h:m') }}


                        </td>
                        <td>
                            <div class="action-button-container d-flex justify-content-evenly">
                                <x-view-button href=" {{ route('gallery.single', $gallery) }} " />
                                <x-edit-button href=" {{ route('gallery.edit', $gallery) }} " />
                                <x-delete-button :model="$gallery" :modelId="$gallery->id" :modelName="$gallery->title" action="{{ route('gallery.destroy', $gallery) }} " type="gallery" />
                                
                            </div>

                        </td>
                    </tr>
                @endforeach

            </tbody>

            <tfoot>

            </tfoot>
        </table>

        <div class="mt-3">
            {{ $galleries->links() }}
        </div>
    </x-card>



</x-app-layout>
