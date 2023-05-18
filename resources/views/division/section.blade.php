<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Divisions & Sections') }}
        </h2>
    </x-slot>



    @if (session('status') === 'profile-updated')
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ __('Section has been created') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        
    @endif
    <div class="row">
        <div class="col-6">
            <x-card>
                <form method="POST" action="{{ route('section.store') }}">
                    @csrf

                    <div class="form-group row mb-3">
                        <x-input-label for="section_name" :value="__('Section Name')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="section_name" class="" :value="old('section_name')" type="text"
                                name="section_name" required autocomplete="section_name" />
                            <x-input-error :messages="$errors->get('section_name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <x-input-label for="description" :value="__('Description')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="description" class="" :value="old('description')" type="text"
                                name="description" required autocomplete="description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>


                    <div class="form-group row mb-3">
                        <x-input-label for="division" :value="__('Division')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <select class="form-select" aria-label="Division Select" id="division" name="division" required>
                                <option selected>Select Division</option>

                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>





                    <hr>
                    <div class="form-group row mb-3">
                        <div class="col-6">

                        </div>
                        <div class="col-3 px-1">
                            <x-secondary-button class="ml-3 w-100">
                                {{ __('Cancel') }}
                            </x-secondary-button>
                        </div>
                        <div class="col-3 px-1">
                            <x-primary-button class="ml-3">
                                {{ __('Create Division') }}
                            </x-primary-button>
                        </div>

                    </div>
                </form>

            </x-card>

        </div>

        <div class="col-6">

            @if (isset($sections))
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Section Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Division</th>
                            <th scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($sections as $key=>$section )
                              <tr>
                                   <th scope="row">{{ $key+1 }}</th>
                                   <td>{{ $section->name ?? ''}}</td>
                                   <td>{{ $section->description ??'' }}</td>
                                   <td>{{ $section->division->name ?? '' }}</td>
                              </tr>
                         @endforeach
                        
                    </tbody>
                </table>
            @else
                <div>Create sections</div>
            @endif


        </div>


    </div>


</x-app-layout>
