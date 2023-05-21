<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __(' New Word of the Day') }}
        </h2>
    </x-slot>


    <div class="row ">
        <div class="col-7 ">

            <x-card>
                <div class="card-body">


                    <form method="POST" action="{{ route('wordoftheday.store') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row mb-3">
                            <x-input-label for="word_english" :value="__('Today\'s Word in English')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input :errorMsg="$errors->has('word_english')" id="word_english" class="" :value="old('word_english')" type="text"
                                    name="word_english" autocomplete="word_english" />
                                <x-input-error :messages="$errors->get('word_english')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="word_hindi" :value="__('Today\'s Word in Hindi')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input :errorMsg="$errors->has('word_hindi')" id="word_hindi" class="" :value="old('word_hindi')" type="text"
                                    name="word_hindi"  autocomplete="word_hindi" />
                                <x-input-error :messages="$errors->get('word_hindi')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="word_tamil" :value="__('Today\'s Word in Tamil')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input :errorMsg="$errors->has('word_tamil')" id="word_tamil" class="" :value="old('word_tamil')" type="text"
                                    name="word_tamil"  autocomplete="word_tamil" />
                                <x-input-error :messages="$errors->get('word_tamil')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="word_meaning" :value="__('Meaning of the word')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <textarea id="word_meaning" class="form-control @if($errors->has('word_meaning')) is-invalid @endif" :value="old('word_meaning')"  autocomplete="word_meaning" ></textarea>
                              
                                <x-input-error :messages="$errors->get('word_meaning')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="word_audio_file" :value="__('Upload Audio')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input :errorMsg="$errors->has('word_audio_file')" id="word_audio_file" class="" :value="old('word_audio_file')" type="file"
                                    name="word_audio_file"  />
                                <x-input-error :messages="$errors->get('word_audio_file')" class="mt-2" />
                            </div>
                          
                        </div>


                      

















                        <hr>
                        <div class="form-group row mb-3">
                            <div class="col-9">

                            </div>
                           
                            <div class="col-3">
                                <x-primary-button class="ml-3">
                                    {{ __('Publish Word') }}
                                </x-primary-button>
                            </div>

                        </div>




                    </form>


                </div>
            </x-card>



        </div>
    </div>

</x-app-layout>
