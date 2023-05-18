<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Edit Gallery - ' . $gallery->title) }}
        </h2>
    </x-slot>

    <x-card>
        <div class="card-body">
            <form id="gallery-form" method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">


                    <div class="col-6">
                        <div class="form-group row mb-3">
                            <x-input-label for="title" :value="__('Gallery Title')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="title" class="" :value="old('title', $gallery->title)" type="text"
                                    name="title" autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="description" :value="__('Gallery Description')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="description" class="" :value="old('description', $gallery->description)" type="text"
                                    name="description" autocomplete="description" />
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <div class="col-4">
                                <x-input-label for="featured_image" :value="__('Featured Image')" class=" col-form-label" />
                                <div id="" class="form-text" style="margin: 0">Adding a new image will replace
                                    the existing featured image</div>

                            </div>


                            <div class="col-8">
                                <img class="" src="{{ asset('storage/' . $gallery->featured_image) }}"
                                    width="100%" />
                                <input id="featured_image" name="featured_image" type="file"
                                    accept="image/png, image/jpeg, image/gif" />
                            </div>

                        </div>
                        <div class="form-group row mb-3">

                            <x-input-label for="gallery-image" :value="__('Gallery Images')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <input id="gallery-image" name="gallery-image" type="file"
                                    accept="image/png, image/jpeg, image/gif" id="gallery-image" />
                            </div>

                        </div>
                        <hr />
                        <div class=" row form-group mt-3">
                            <div class="col-8">

                            </div>

                            <div class="col-4 ">
                                <x-primary-button class="ml-3">
                                    {{ __('Update Gallery') }}
                                </x-primary-button>
                            </div>

                        </div>
                    </div>

            </form>
            <script type="module">
                        $(document).ready(function() {
                            $(".delete-form").on('submit', function(e){
                                e.preventDefault();
                                var element = "#" + ($(this).data('element'));
                              
                                $.ajax({
                                    type: 'post',
                                    headers: {
                                        'X-CSRF-TOKEN' : '{{ csrf_token() }}',
                                    },
                                    url: $(this).data('route'),
                                    data: {'_method': 'delete'},
                                    success: function (response, textStatus, xhr){
                                        $(element).fadeOut("normal", function() {
                                            $(this).remove();
                                        });
                                    }
    });
   
});
});
                    </script>


            <div class="col-6">
                Existing Images
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mb-3">
                    @foreach ($gallery->galleryimages as $gi)
                        <div class="col galleryEditImageParentContainer" id="galleryImage-{{ $gi->id }}">
                            <div class="overlay"></div>
                            <div class="galleryEditImageContainer">
                                <img src="{{ asset('storage/' . $gi->image_path) }}" />

                            </div>
                            <form id="delForm-{{ $gi->id }}" method="post" class="delete-form"
                                data-route="{{ route('galleryImageDeletewithID', $gi) }}"
                                data-element="galleryImage-{{ $gi->id }}">

                                <button type="submit" class="deleteRecord btn btn-outline-danger"
                                    data-id="{{ $gi->id }}" form="delForm-{{ $gi->id }}"> <svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" width="20">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>

        </div>

    </x-card>

</x-app-layout>


<script type="module">


     const inputElement = document.querySelector('#featured_image');
     const pond = FilePond.create(inputElement,{
         allowImagePreview: true,
         allowMultiple:false,
         labelIdle: `Drag & Drop your Featured Image or <span class="filepond--label-action">Browse</span>`,
        credits:false,   
        storeAsFile: true,
        server:{
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            load:(source, load, error, progress, abort, headers) => {
            // Should request a file object from the server here
            // ...

            // Can call the error method if something is wrong, should exit after
            error('oh my goodness');

            // Can call the header method to supply FilePond with early response header string
            // https://developer.mozilla.org/en-US/docs/Web/API/XMLHttpRequest/getAllResponseHeaders
            headers(headersString);

            // Should call the progress method to update the progress to 100% before calling load
            // (endlessMode, loadedSize, totalSize)
            progress(true, 0, 1024);

            // Should call the load method with a file object or blob when done
            load(file);

            // Should expose an abort method so the request can be cancelled
            return {
                abort: () => {
                    // User tapped cancel, abort our ongoing actions here

                    // Let FilePond know the request has been cancelled
                    abort();
                },
            };
        },
        }
       
       });
     
       
       const galleryImages = FilePond.create(document.querySelector('#gallery-image'), {
         allowMultiple : true,   
         credits : false,
         styleButtonRemoveItemPosition: 'bottom', 
         allowRemove: false,
         allowUpload:false,
         server:{
             headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            
             process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                 const formData = new FormData();
                 formData.append(fieldName, file, file.name);
     
                 const request = new XMLHttpRequest();
                 request.open('POST', '{{ route('galleryImageUpload') }}');
                 request.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');   
     
     
     
                 request.upload.onprogress = (e) => {
                     progress(e.lengthComputable, e.loaded, e.total);
                 };
     
                 request.onload = function () {
                     if (request.status >= 200 && request.status < 300) {
                         // the load method accepts either a string (id) or an object
                         load(request.responseText);
                         let data = JSON.parse(request.responseText)
                     var input = document.createElement("input")
                     input.setAttribute("type", "hidden");
                     input.setAttribute("name", "hidden_ids[]");
                     input.setAttribute("value",data.id)
                     input.setAttribute("id",data.id)
                     document.getElementById("gallery-form").appendChild(input);
                      
                     } else {
     
                         error('oh no');
                     }
                 };
     
                 request.send(formData);
     return {
                     abort: () => {
                         request.abort();
                         abort();
                     },
                 };
             },
             revert : {
                 url: '{{ route('galleryImageDelete') }}'}
             
         }
        
         
       });
     
     
       
       
     
      </script>
