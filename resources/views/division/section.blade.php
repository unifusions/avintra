<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Sections') }}
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
                        <x-input-label for="name" :value="__('Section Name')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input :errorMsg="$errors->has('name')"  id="name" class="" :value="old('name')" type="text"
                                name="name"  autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <x-input-label for="description" :value="__('Description')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input  :errorMsg="$errors->has('description')" id="description" class="" :value="old('description')" type="text"
                                name="description"  autocomplete="description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>


                    <div class="form-group row mb-3">
                        <x-input-label for="division" :value="__('Division')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <select class="form-select @if($errors->has('division_id')) is-invalid @endif" aria-label="Division Select" id="division_id" name="division_id" >
                                <option value=""   selected>Select Division</option>

                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" @if(old('division_id') == $division->id) selected @endif >{{ $division->name }}</option>
                                @endforeach

                            </select>
                            <x-input-error :messages="$errors->get('division_id')" class="mt-2"/>
                        </div>
                    </div>





                    <hr>
                    <div class="form-group row mb-3">
                        <div class="col-9">

                        </div>
                        
                        <div class="col-3 ">
                            <x-primary-button class="ml-3">
                                {{ __('Create Section') }}
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
                                   <td>
                                    <div class="action-button-container d-flex justify-content-evenly">
                                        {{-- <x-edit-button href=" {{ route('section.edit', $section) }} " /> --}}
                                        <x-delete-button :modelId="$section->id" :modelName="$section->name" action="{{ route('section.destroy', $section) }} "  type="section"  />
                    
                                    </div>
                                   </td>
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
