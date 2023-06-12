<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Users') }}
        </h2>

        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('user.create') }}">Add New User</x-hyperlinkbutton>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-7">
            <x-card>
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf


                    <div class="form-group row mb-3">
                        <x-input-label for="full_name" :value="__('Full Name')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="full_name" class="" :value="old('full_name')" type="text"
                                name="full_name" autocomplete="full_name" required />
                            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <x-input-label for="email" :value="__('Email')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="email" class="" type="email" name="email" :value="old('email')"
                                required autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">

                        <x-input-label for="password" :value="__('Password')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>


                    </div>

                    <div class="form-group row mb-3">
                        <x-input-label for="division" :value="__('Division')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <select class="form-select" aria-label="Division Select" id="division_id"
                                name="division_id">
                                <option selected>Select Division</option>

                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <x-input-label for="permissions" :value="__('Permissions')" class="col-4 col-form-label" />

                        <div class="col-8">
                            @foreach ($permissionsList as $key => $permissionList)
                                <div class="row border-bottom mb-2">
                                    <div class="col-2 mb-3 fw-medium"> {{ $key }}</div>
                                    <div class="col-10">
                                        {{-- <div class="row row-cols-md-6"> --}}

                                        @foreach ($permissionList as $pl)
                                            <div class="form-check form-check-inline ">
                                                <input class="form-check-input" name="hasPermissionsCheckBox[]"
                                                    type="checkbox" id="hasPermissionsCheckBox-{{ $pl->id }}"
                                                    value="{{ $pl->id }}"
                                                    >
                                                <label class="form-check-label"
                                                    for="hasPermissionsCheckBox-{{ $pl->id }}">
                                                    {{ $pl->name }}</label>
                                            </div>
                                        @endforeach
                                        {{-- </div> --}}
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <hr>

                        <div class="form-group row mb-3">
                            <div class="col-6"></div>

                            <div class="col-3">
                                <x-secondary-button class="ml-3 w-100">
                                    {{ __('Cancel') }}
                                </x-secondary-button>
                            </div>

                            <div class="col-3">
                                <x-primary-button class="ml-3">
                                    {{ __('Create User') }}
                                </x-primary-button>
                            </div>

                        </div>




                </form>
            </x-card>
        </div>
    </div>

</x-app-layout>
