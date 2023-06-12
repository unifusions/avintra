<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Users') }}
        </h2>

        <div class="ms-3">
            <x-hyperlinkbutton href="{{ route('user.create') }}">Edit User</x-hyperlinkbutton>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-7">
            <x-card>
                <form method="POST" action="{{ route('user.update', $user) }}" enctype="multipart/form-data">
                    @csrf  @method('PATCH')


                    <div class="form-group row mb-3">
                        <x-input-label for="full_name" :value="__('Full Name')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="full_name" class="" :value="old('full_name', $user->name)" type="text"
                                name="full_name" autocomplete="full_name" required />
                            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <x-input-label for="email" :value="__('Email')" class="col-4 col-form-label" />
                        <div class="col-8">
                            <x-text-input id="email" class="" type="email" name="email" :value="old('email', $user->email)"
                                required autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <div class="col-4 col-form-label">
                            <x-input-label for="password" :value="__('Password')" class="" />
                            <div id="" class="form-text" style="margin: 0">Setting the value with reset the
                                password.</div>
                        </div>

                        <div class="col-8">
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                 autocomplete="new-password" />
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
                                    <option value="{{ $division->id }}"
                                        {{ $user->division_id === $division->id ? 'selected' : '' }}>
                                        {{ $division->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <hr>
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
                                                    @foreach ($user->permissions as $userp)
                                        {{ $userp->id === $pl->id ? 'checked' : '' }} @endforeach>
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

                    </div>




                    <hr>

                    <div class="form-group row mb-3">
                        <div class="col-9"></div>



                        <div class="col-3">
                            <x-primary-button class="ml-3">
                                {{ __('Update User') }}
                            </x-primary-button>
                        </div>

                    </div>
                </form>
            </x-card>
        </div>
    </div>

    {{-- @foreach ($user->permissions as $permission)
    {{ $permission->model }} | {{ $permission->name }} 
    @endforeach --}}

</x-app-layout>
