<div class="news-container">
    <div class="news-container-smalllist">
        <div class="">
            <h3 class="news-heading"> {{ __('Latest News & Announcements') }}</h3>
        </div>
        <div class="news-smalllist-wrapper">
            @foreach ($news as $n)
                <div class="news-item">
                    <div class="news-itemin">
                        <div class="news-title">
                            <a
                                href="{{ route('singlenews' , $n->slug) }}">
                                {{ $n->news_title }}
                            </a>
<br>
                            
                        </div>


                    </div>
                </div>
            @endforeach






        </div>
    </div>
</div>

