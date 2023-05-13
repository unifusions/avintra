<div class="section-heading d-flex justify-content-between align-items-center mb-3 ">
    <div class="d-flex align-items-center">
        <div class="heading-icon me-2 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="#fff"
                width=30>
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
            </svg>

        </div>

        <h3 class="section-heading flex-grow-1"> {{ __('Latest News') }}</h3>


    </div>
    <div>
        <x-hyperlinkbutton href="{{ route('publicnews') }}" class="" :outline="true">
            All News <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                stroke="currentColor" width="20">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>

        </x-hyperlinkbutton>
    </div>
</div>
<hr>

<div class="news-container">
    <div class="news-container-smalllist">

        <div class="news-smalllist-wrapper">
           
            @if(count($news)> 0)
                @foreach ($news as $key => $n)
                    <div class="news-item">
                        <div class="news-itemin">
                            <div class="news-title d-flex align-items-center ">

                                <div class="d-flex flex-column text-center me-3 vertical-seperator">
                                    <span class="fs-3 fw-bold text-primary">{{ $n->created_at->format('d') }}</span>
                                    <span class="text-muted p-0 m-0 text-uppercase"
                                        style="line-height: 0.75rem">{{ $n->created_at->format('M') }}</span>

                                </div>

                                <div class="flex-grow-1">
                                    <div class="news-title ">
                                        <a href="{{ route('singlenews', $n->slug) }}">
                                            {{ $n->news_title }}



                                        </a>
                                        @if ($key < 2)
                                            <div class="badge badge-new ms-2 text-uppercase fw-light">New</div>
                                        @endif
                                    </div>

                                    <div class="small">
                                        {{ $n->news_category->category_title }}
                                    </div>

                                </div>





                            </div>


                        </div>
                    </div>
                @endforeach
            @else
                Publish your first news to get preview
            @endif




        </div>

    </div>
</div>
