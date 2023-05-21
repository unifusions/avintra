<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Edit Division - ' . $division->name) }}
        </h2>
    </x-slot>




    <div class="row">
        <div class="col-7">
            <x-card>
                <form method="post" action="{{ route('division.update', $division) }}">
                    @csrf  @method('patch')


                    <div class="form-group row mb-3">
                        <x-input-label for="division" :value="__('Division Name')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input :errorMsg="$errors->has('name')" id="name" class="" :value="old('name', $division->name)" type="text" name="name"
                                 autocomplete="division" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <x-input-label for="description" :value="__('Description')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input  :errorMsg="$errors->has('description')" id="description" class="" :value="old('description', $division->description)" type="text"
                                name="description"  autocomplete="description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                    </div>






                    <hr>
                    <div class="form-group row mb-3">
                        <div class="col-9">

                        </div>
                        
                        <div class="col-3">
                            <x-primary-button>
                                {{ __('Save Division') }}
                            </x-primary-button>
                        </div>

                    </div>


                </form>
        </div>
        </x-card>

    </div>


    </div>


</x-app-layout>
