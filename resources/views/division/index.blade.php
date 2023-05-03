<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Divisions & Sections') }}
        </h2>
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

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </x-card>

        </div>


    </div>


</x-app-layout>
