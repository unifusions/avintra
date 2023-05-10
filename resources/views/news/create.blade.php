<x-app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('News - New') }}
        </h2>
    </x-slot>

    <div class="row ">
        <div class="col-7 ">

            <x-card>
                <div class="card-body">
                  

                    <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group row mb-3">
                            <x-input-label for="news_title" :value="__('News Title')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="news_title" class="" :value="old('news_title')" type="text"
                                    name="news_title" required autocomplete="news_title" />
                                <x-input-error :messages="$errors->get('news_title')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="news_excerpt" :value="__('News Excerpt')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <textarea id="news_excerpt" class="form-control" :value="old('news_excerpt')" type="text"
                                    name="news_excerpt" required autocomplete="news_excerpt"></textarea>
                                <x-input-error :messages="$errors->get('news_excerpt')" class="mt-2" />
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <x-input-label for="news_category" :value="__('News Category')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <select class="form-select"  id="news_category_id"
                                    name="news_category_id" >
                                    <option selected>Select Category</option>

                                    @foreach ($news_categories as $news_category)
                                            <option value="{{ $news_category->id }}">{{ $news_category->category_title }}</option>
                                        @endforeach

                                </select>
                            </div>
                        </div>

                      

                        <div class="form-group row mb-3">
                            <x-input-label for="news_content" :value="__('News Content')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-tiny-editor id="news_content" class="" :value="old('news_content')"
                                    name="news_content"  />
                                <x-input-error :messages="$errors->get('news_content')" class="mt-2" />
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
                                    {{ __('Publish News') }}
                                </x-primary-button>
                            </div>

                        </div>




                    </form>


                </div>
            </x-card>



        </div>
    </div>





</x-app-layout>
