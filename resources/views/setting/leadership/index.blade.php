<x-settings-layout>
    <x-card>
        <div class="d-flex align-itmes-center gap-3 mb-3">
            <h3>Leadership</h3>
            <div class="">
                <x-hyperlinkbutton href="{{ route('leadership.create') }}">New Leader</x-hyperlinkbutton>
            </div>
        </div>



        <table class="table">
            <thead>
                <th scope="col" width="2%">#</th>
                <th scope="col"  width="5%">Image</th>
                <th scope="col"  width="12%">Name</th>
                <th scope="col"  width="12%">Designation</th>
                <th scope="col" width="10%">Email</th>
                <th scope="col" width="10%">Address</th>
                <th scope="col" width = "20%">Bio</th>
                <th scope="col" width="3%">Actions</th>
            </thead>

            <tbody>
                @if (count($leaderships) < 1)
                    <tr>
                        <td colspan="8">Empty</td>
                    </tr>
                @else
                    @foreach ($leaderships as $key => $leader)
                        <tr class="align-middle">
                            <th scope="row">{{ $leaderships->firstItem() + $key }}</th>
                            <td>
                                <img src="{{ asset('storage/' . $leader->image_path) }}" alt="" width="60px"
                                    height="60px" aria-hidden="true" preserveAspectRatio="xMidYMid slice"
                                    focusable="false" style=" object-fit: cover;">

                            </td>
                            <td>{{ $leader->name }}</td>
                            <td>{{ $leader->designation }}</td>
                            <td>{{ $leader->email }}</td>
                            <td>{{ $leader->address }}</td>
                            <td>
                                <div class="leader-bio-container" style=" ">{{ $leader->bio }}
                                </div>
                            </td>
                            <td>
                                <div class="action-button-container d-flex justify-content-evenly">

                                    <x-edit-button href=" {{ route('leadership.edit', $leader) }} " />
                                    <x-delete-button :modelId="$leader->id" :modelName="$leader->title" :model="$leader"
                                        action="{{ route('leadership.destroy', $leader) }} " type="leader" />

                                </div>
                            </td>
                        </tr>
                    @endforeach

                @endif
            </tbody>
        </table>
    </x-card>
</x-settings-layout>
