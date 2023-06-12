<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Edit Document | ' . $document->document_no) }}
        </h2>
    </x-slot>

    <div class="row ">
        <div class="col-7 ">

            <x-card>
                <div class="card-body">
                    <div class="justify-content-center align-items-center spinner-div" style="">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    {{-- <div id="spinner-div" class="pt-5"
                        style=" margin: auto;
                        position: absolute;
                    display: none;
                    width: 100%;
                    height: 100%;
                    
                    top: 0;
                    left: 0;
                    bottom:0;
                    right:0;
                    text-align: center;
                    background-color: rgba(255, 255, 255, 0.8);
                    z-index: 2;">
                        <div class="spinner-border text-primary" role="status">
                        </div>
                    </div> --}}

                    <form method="POST" action="{{ route('documents.update', $document) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row mb-3">
                            <x-input-label for="title" :value="__('Document Title')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="title" class="" :value="old('title', $document->title)" type="text"
                                    name="title" required autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="document_no" :value="__('Document No')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="document_no" class="" :value="old('document_no', $document->document_no)" type="text"
                                    name="document_no" required autocomplete="title" />
                                <x-input-error :messages="$errors->get('document_no')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="document_category_id" :value="__('Document Category')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <select class="form-select @if ($errors->has('document_category_id')) is-invalid @endif"
                                    aria-label="Division Select" id="document_category_id" name="document_category_id">
                                    <option value="" selected>Select Category</option>

                                    @foreach ($documentsCategories as $documentsCategory)
                                        <option value="{{ $documentsCategory->id }}"
                                            @if (old('document_category_id', $document->document_category->id ?? '') == $documentsCategory->id) selected @endif>
                                            {{ $documentsCategory->category_title }}
                                        </option>
                                    @endforeach
                                </select>

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
                                            {{ $document->division_id === $division->id ? 'selected' : '' }}>
                                            {{ $division->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <script type="module">
                                $(document).ready(function(){
                                    $('#division_id').on('change', function(){
                                        var divisionId = this.value;
                                        $('.spinner-div').addClass('d-flex');
                                       
                                        $.ajax({
                    url: "{{url('/fetchSections')}}",
                    type: "POST",
                    data: {
                        division_id: divisionId,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    
                    success: function (result) {
                        $("#section_id").removeAttr("disabled");
                        $('#section_id').html('<option value="">Select Section</option>');
                        $.each(result.sections, function (key, value) {
                            $("#section_id").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                      
                    },
                    complete: function () {
                $('.spinner-div').removeClass('d-flex');//Request is complete so hide spinner
            }
                });
            });

                                    });
                                
                            </script>

                        <div class="form-group row mb-3">
                            <x-input-label for="section" :value="__('Section')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <select class="form-select" aria-label="Division Select" id="section_id"
                                    name="section_id">
                                    <option selected>Select Section</option>

                                    @foreach ($document->division->sections as $section)
                                        <option value="{{ $section->id }}"
                                            {{ $document->section_id === $section->id ? 'selected' : '' }}>
                                            {{ $section->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3 align-items-center">
                            <x-input-label for="document_file" :value="__('Document Upload')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <div class="d-flex align-items-center gap-2">
                                    @switch($document->file_type)
                                        @case('pdf')
                                            <x-icons.pdf-icon />
                                        @break
                                            
                                        @case('docx')
                                       <x-icons.word-doc-icon/>
                                    @break

                                    @case('xlsx')
                                    <x-icons.excel-icon/>
                                    @break

                                        @default
                                        
                                    @endswitch

                                    <a href="{{ route('documents.download', $document) }}" target="_blank">
                                        {{ $document->file_name ?: 'No Name' }} </a>

                                </div>

                            </div>

                        </div>
                        <hr>
                        <div class="form-group row mb-3">
                            <div class="col-9">

                            </div>

                            <div class="col-3">
                                <x-primary-button class="ml-3">
                                    {{ __('Save Document') }}
                                </x-primary-button>
                            </div>

                        </div>




                    </form>


                </div>
            </x-card>



        </div>
    </div>





</x-app-layout>
