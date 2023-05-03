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
                            <x-text-input id="division" class="" :value="old('division')" type="text" name="division"
                                required autocomplete="division" />
                            <x-input-error :messages="$errors->get('division')" class="mt-2" />
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
        </div>
        </x-card>

    </div>


    </div>


</x-app-layout>
