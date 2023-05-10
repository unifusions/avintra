<x-guest-layout :title="$news->news_title">


    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex align-items-center">
                    <div class="d-flex flex-column text-center me-4 "
                        style="min-width: 130px; border-right:1px solid #94701D">
                        <span class="fs-2 fw-bold text-primary">{{ $news->created_at->format('d') }}</span>
                        <span class="p-0 m-0 text-uppercase"
                            style="line-height: 0.75rem">{{ $news->created_at->format('M, Y') }}</span>

                    </div>
                    <div>
                        <div class="badge bg-primary">{{ $news->news_category->category_title }}</div>
                        <h2> {{ $news->news_title }} </h2>
                    </div>


                </div>
                <hr>
                {!! $news->news_content !!}
            </div>

            <div class="col-md-4">
                <div class="card  mb-3 rounded-0 ">
                    <div class="card-body">
                        <h4 class="widget-title">Recent News</h4>
                        <div class="widget-border"></div>
                        <div>
                            @foreach ($latestnews as $key => $n)
                                <div class="news-item">
                                    <div class="news-itemin">
                                        <div class="news-title d-flex align-items-center ">

                                            <div class="d-flex flex-column text-center me-3 vertical-seperator">
                                                <span
                                                    class="fs-3 fw-bold text-primary">{{ $n->created_at->format('d') }}</span>
                                                <span class="text-muted p-0 m-0 text-uppercase"
                                                    style="line-height: 0.75rem">{{ $n->created_at->format('M') }}</span>

                                            </div>


                                            <div class="flex-grow-1">
                                                <div class="news-title ">
                                                    <a href="{{ route('singlenews', $n->slug) }}">
                                                        {{ $n->news_title }}
                                                    </a>
                                                </div>

                                                <div class="small">
                                                    {{ $n->news_category->category_title }}
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>


                </div>

                <div class="card mb-3 rounded-0 ">
                    <div class="card-body">
                        <h4 class="widget-title">Categories</h4>
                        <div class="widget-border"></div>
                        <div>

                            <ul class="widget-nav nav flex-column">

                                @foreach ($news_categories as $item)
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="#">
                                             <div class="d-flex justify-content-between">
                                                  <div class="">{{ $item->category_title }}</div>
                                                  <div class="">{{ count($item->news) }} </div>
                                                  
                                             </div>
                                             
                                        
                                        </a>
                                    </li>



                                    
                                @endforeach

                            </ul>

                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
</x-guest-layout>
