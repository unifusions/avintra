<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Add New Gallery') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="card-body">
            <form id="gallery-form" method="POST" action="{{ route('gallery.store') }}">
                @csrf
                <div class="row">


                    <div class="col-6">
                        <div class="form-group row mb-3">
                            <x-input-label for="title" :value="__('Gallery Title')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="title" class="" :value="old('title')" type="text"
                                    name="title" required autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="description" :value="__('Gallery Description')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="description" class="" :value="old('description')" type="text"
                                    name="description" required autocomplete="description" />
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <x-input-label for="featured-image" :value="__('Featured Image')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <input id="featured-image" name="featured-image" type="file"
                                    accept="image/png, image/jpeg, image/gif" id="featured-image" />



                            </div>

                        </div>

                    </div>
                    <div class="col-6">
                        <x-input-label for="gallery-image" :value="__('Gallery Images')" class="col-4 col-form-label" />

                        <input id="gallery-image" name="gallery-image" type="file"
                            accept="image/png, image/jpeg, image/gif" id="gallery-image" required />




                    </div>
                    <div class="col-12 border-top">
                        <div class=" row form-group mt-3">
                            <div class="col-8">

                            </div>
                            <div class="col-2 ">
                                <x-secondary-button class="ml-3 w-100">
                                    {{ __('Cancel') }}
                                </x-secondary-button>
                            </div>
                            <div class="col-2 ">
                                <x-primary-button class="ml-3">
                                    {{ __('Publish Gallery') }}
                                </x-primary-button>
                            </div>

                        </div>
                    </div>

                </div>
            </form>
        </div>

    </x-card>



    <script type="module">
var allids=[];
const inputElement = document.querySelector('#featured-image');
const pond = FilePond.create(inputElement,{
    allowImagePreview: true,
    labelIdle: `Drag & Drop your Featured Image or <span class="filepond--label-action">Browse</span>`,
   credits:false,   
  });

  const galleryImages = FilePond.create(document.querySelector('#gallery-image'), {
    allowMultiple : true,   
    credits : false,
    styleButtonRemoveItemPosition: 'bottom',
    server:{
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},

        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
            // fieldName is the name of the input field
            // file is the actual file object to send
            const formData = new FormData();
            formData.append(fieldName, file, file.name);

            const request = new XMLHttpRequest();
            request.open('POST', '{{ route('galleryImageUpload') }}');
            request.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');   

            // Should call the progress method to update the progress to 100% before calling load
            // Setting computable to false switches the loading indicator to infinite mode
            request.upload.onprogress = (e) => {
                progress(e.lengthComputable, e.loaded, e.total);
            };

            // Should call the load method when done and pass the returned server file id
            // this server file id is then used later on when reverting or restoring a file
            // so your server knows which file to return without exposing that info to the client
            request.onload = function () {
                if (request.status >= 200 && request.status < 300) {
                    // the load method accepts either a string (id) or an object
                    load(request.responseText);
                    let data = JSON.parse(request.responseText)
                var input = document.createElement("hidden_ids")
                input.setAttribute("type", "hidden");
                input.setAttribute("name", "hidden_ids[]");
                input.setAttribute("value",data.id)
                input.setAttribute("id",data.id)
                document.getElementById("gallery-form").appendChild(input);
                    galleryImages.setOptions('allowRevertButton', false)
                    
                } else {
                    // Can call the error method if something is wrong, should exit after
                    error('oh no');
                }
            };

            request.send(formData);

            // Should expose an abort method so the request can be cancelled
            return {
                abort: () => {
                    // This function is entered if the user has tapped the cancel button
                    request.abort();

                    // Let FilePond know the request has been cancelled
                    abort();
                },
            };
        },
        remove: (source, load,error) =>{

            console.log("source" + source)
            // const formData = new FormData();
            // formData.append(fieldName, file, file.name);
0
            // const request = new XMLHttpRequest();
            // request.open('POST', '{{ route('galleryImageDelete') }}');
            // request.setRequestHeader('x-csrf-token', '{{ csrf_token() }}'); 

        } ,
        // load: (src, load) => {
            
        //              load();
        //              console.log('load' + response);
        //             },
        // revert: (src, load) => {
        //     fetch(src).then(
        //             console.log('reverted')
        //         ).then(load)
        //         load();
                
        //     },
    }
   
    

    // server : {
    //     process:  '{{ route('galleryImageUpload') }}',
    //     revert: '{{ route('galleryImageDelete') }}',
    //     headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},

    //         load: (src, load) => {
            
    //          load();
    //          console.log('load' + response);
    //         },
            
    //         revert: (src, load) => {
    //             fetch(src).then(
    //                 console.log('reverted')
    //             ).then(load)
    //             load();
    //         },
            
       
             
    //     //   load : (source, load, error, progress, abort, headers) => {

               
    //     //         //   console.log('uniqueFileId', source)
    //     //         //    fetch(source)
    //     //         //          .then(res => {
    //     //         //             console.log('responseblob', res)
    //     //         //             return res.blob()
    //     //         //         })
    //     //         //         .then(load)
    //     //         //         .catch(error);
    //     //         // }
    //     // },
    
    // }
                                           
                                                            
    // server : {
    //     headers: {
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //         },
    //     process: {
    //         url: '{{ route('galleryImageUpload') }}',
    //        onload: (response) =>{ 
    //             let data = JSON.parse(response)
    //             var input = document.createElement("hidden_ids")
    //             input.setAttribute("type", "hidden");
    //             input.setAttribute("name", "hidden_ids[]");
    //             input.setAttribute("value",data.id)
    //             document.getElementById("gallery-form").appendChild(input);
    //         },
    //     revert : './galleryImageDelete',
        
    // },

    
// },
  })

 </script>

</x-app-layout>
