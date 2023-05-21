<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Divisions & Sections') }}
        </h2>
        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('division.create') }}">New Division</x-hyperlinkbutton>
        </div>
    </x-slot>




    <div class="row">
        <div class="col-12">
            <x-card>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Division</th>
                            <th scope="col">Description</th>
                            <th scope="col">Sections</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisions as $key => $division)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $division->name }}</td>
                                <td>{{ $division->description }}</td>
                                <td>

                                    @foreach ($division->sections as $section)
                                      <span class="badge bg-light text-dark">{{ $section->name }}</span>  
                                    @endforeach

                                </td>
                                <td>
                                    <div class="action-button-container d-flex justify-content-evenly">
                                        <x-edit-button href=" {{ route('division.edit', $division) }} " />
                                        <x-delete-button action=" {{ route('division.destroy', $division) }} " />
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </x-card>

        </div>


    </div>


</x-app-layout>
