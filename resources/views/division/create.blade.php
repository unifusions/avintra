<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('New Division') }}
        </h2>
    </x-slot>




    <div class="row">
        <div class="col-7">
            <x-card>
                <form method="POST" action="{{ route('division.store') }}">
                    @csrf


                    <div class="form-group row mb-3">
                        <x-input-label for="division" :value="__('Division Name')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input :errorMsg="$errors->has('name')" id="name" class="" :value="old('name')" type="text" name="name"
                                 autocomplete="division" />
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






                    <hr>
                    <div class="form-group row mb-3">
                        <div class="col-9">

                        </div>
                        
                        <div class="col-3">
                            <x-primary-button>
                                {{ __('Create Division') }}
                            </x-primary-button>
                        </div>

                    </div>


                </form>
        </div>
        </x-card>

    </div>


    </div>


</x-app-layout>
