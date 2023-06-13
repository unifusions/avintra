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
                  

                    <form method="POST" action="{{ route('news.update', $news) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')


                        <div class="form-group row mb-3">
                            <x-input-label for="news_title" :value="__('News Title')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <x-text-input id="news_title" class="" :value="old('news_title', $news->news_title)" type="text"
                                    name="news_title" required autocomplete="news_title" />
                                <x-input-error :messages="$errors->get('news_title')" class="mt-2" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <x-input-label for="news_excerpt" :value="__('News Excerpt')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <textarea id="excerpt" class="form-control" :value="old('excerpt', $news->excerpt)" type="text"
                                    name="excerpt" required autocomplete="excerpt">{{ $news->excerpt}}</textarea>
                                <x-input-error :messages="$errors->get('excerpt')" class="mt-2" />
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <x-input-label for="news_category" :value="__('News Category')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <select class="form-select"  id="news_category_id"
                                    name="news_category_id" >
                                    <option selected>Select Category</option>

                                    @foreach ($news_categories as $news_category)
                                            <option value="{{ $news_category->id }}" {{ $news->news_category_id === $news_category->id ? 'selected' : '' }}>{{ $news_category->category_title }}</option>
                                        @endforeach

                                </select>
                            </div>
                        </div>

                      

                        <div class="form-group row mb-3">
                            <x-input-label for="news_content" :value="__('News Content')" class="col-4 col-form-label" />
                            <div class="col-8">
                                <textarea class="form-control" id="news_content" class="" :value="old('news_content', $news->news_content)"
                                name="news_content" required>{{  $news->news_content }}</textarea>
                                {{-- <x-tiny-editor id="news_content" class="" :value="old('news_content')"
                                    name="news_content"  /> --}}
                                <x-input-error :messages="$errors->get('news_content')" class="mt-2" />
                            </div>
                        </div>

                      



                      

                        

                        
                        <hr>
                        <div class="form-group row mb-3">
                            <div class="col-6">

                            </div>
                            <div class="col-3 px-1">
                              
                            </div>
                            <div class="col-3 px-1">
                                <x-primary-button class="ml-3">
                                    {{ __('Update News') }}
                                </x-primary-button>
                            </div>

                        </div>




                    </form>


                </div>
            </x-card>



        </div>
    </div>





</x-app-layout>
