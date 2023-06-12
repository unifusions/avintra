<div class="form-group row mb-3">
    <x-input-label for="category_title" :value="__('Category Name')" class="col-4 col-form-label" />
    <div class="col-8">
        <x-text-input :errorMsg="$errors->has('category_title')" id="name" class="" :value="old('category_title', $documentsCategory->category_title ??'')" type="text" name="category_title"
            autocomplete="category_title" />
        <x-input-error :messages="$errors->get('category_title')" class="mt-2" />
    </div>
</div>

<div class="form-group row mb-3">
    <x-input-label for="description" :value="__('Description')" class="col-4 col-form-label" />
    <div class="col-8">
        <x-text-input :errorMsg="$errors->has('description')" id="description" class="" :value="old('description', $documentsCategory->description ??'')" type="text"
            name="description" autocomplete="description" />
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>
</div>


<hr>






