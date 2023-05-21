<div class="section-heading d-flex justify-content-between align-items-center mb-3">
    <div class="d-flex align-items-center">
        <div class="heading-icon me-2 p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="#fff"
                width=30>
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />

            </svg>
        </div>

        <h3 class="section-heading flex-grow-1"> {{ __('Word of the day') }}</h3>


    </div>

</div>


<div class="news-container">
    <div class="news-container-smalllist">

        @empty(!$todayword)
            <div>
                <audio controls class="w-100">
                    <source src="{{ asset('storage/' .$todayword->word_audio_file) }}" type="audio/mp3">
                    
                    Your browser does not support the audio element.
                </audio>

            </div>

            <div class="d-flex flex-column justify-content-between">
                <div class="d-flex mb-3">
                    <div class=""></div>
                    <div class="fs-4">{{ $todayword->word_english }} </div>
                </div>

                <div class="d-flex mb-3">
                    <div class=""></div>
                    <div class="fs-4">{{ $todayword->word_hindi }} </div>
                </div>

                <div class="d-flex mb-3">
                    <div class=""></div>
                    <div class="fs-4">{{ $todayword->word_tamil }} </div>
                </div>

                <div class="mb-3">
                    the means of paying for something or buying something (= coins or notes)
                </div>
            </div>
        @endempty

    </div>
</div>
