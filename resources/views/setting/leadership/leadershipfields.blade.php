<div class="form-group row mb-3">
    <x-input-label for="name" :value="__('Full Name')" class="col-4 col-form-label" />
    <div class="col-8 ">
        <x-text-input :errorMsg="$errors->has('name')" id="title" :value="old('name', $leadership->name ?? '')" type="text" name="name"
            autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
</div>




<div class="form-group row mb-3">
    <x-input-label for="designation" :value="__('Designation')" class="col-4 col-form-label" />
    <div class="col-8">
        <x-text-input :errorMsg="$errors->has('designation')" id="designation" class="" :value="old('designation',  $leadership->designation ?? '')" type="text"
            name="designation" autocomplete="designation" />
        <x-input-error :messages="$errors->get('designation')" class="mt-2" />
    </div>
</div>

<div class="form-group row mb-3">
    <x-input-label for="email" :value="__('Email')" class="col-4 col-form-label" />
    <div class="col-8 ">
        <x-text-input :errorMsg="$errors->has('email')" id="title" :value="old('email', $leadership->email ?? '')" type="text" name="email"
            autocomplete="email" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
</div>

<div class="form-group row mb-3">
    <x-input-label for="address" :value="__('Address')" class="col-4 col-form-label" />
    <div class="col-8">
        <x-text-input :errorMsg="$errors->has('address')" id="address" class="" :value="old('address',  $leadership->address ?? '')" type="text" name="address"
            autocomplete="address" />
        <x-input-error :messages="$errors->get('address')" class="mt-2" />
    </div>
</div>


<div class="form-group row mb-3">
    <x-input-label for="bio" :value="__('Biography')" class="col-4 col-form-label" />

    <div class="col-8">
        <textarea class="form-control" id="bio" class="" value="{{ old('bio',  $leadership->bio ?? '')}}" name="bio">{{ old('bio',  $leadership->bio ?? '')}}</textarea>
 
        <x-input-error :messages="$errors->get('bio')" class="mt-2" />

    </div>
</div>




<div class="form-group row mb-3">
    <div class="col-4">
        <x-input-label for="leader_image" :value="__('Leader Image')" class="col-form-label" />
        <div id="" class="form-text" style="margin: 0">Adding a new image will replace
            the existing profile image</div>
    </div>
  
    <div class="col-8">
        @empty($leadership)
        <input id="leader_image" name="leader_image" type="file" accept="image/png, image/jpeg, image/gif" />

        @else
            <img src="{{ asset('storage/' . $leadership->image_path) }}" alt="">
            <input id="leader_image" name="leader_image" type="file" accept="image/png, image/jpeg, image/gif" />
        @endempty
       
    </div>
    <script type="module">
     const inputElement = document.querySelector('#leader_image');
     const pond = FilePond.create(inputElement,{
      allowImagePreview: true,
      allowMultiple:false,
      labelIdle: `Drag & Drop your Leader Image or <span class="filepond--label-action">Browse</span>`,
      credits:false,
      storeAsFile: true,

     
     
     
     
      });
</script>




</div>
<hr>
