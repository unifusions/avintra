@props(['heading' => ''])
<div class="page_header_default">
    <div class="parallax_cover">
        <img src="{{ asset('images/header-bg.png') }}" alt="bg_image" class="cover-parallax">
    </div>
    <div class="page_header_content">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title_inner">
                        <div class="title_page">
                            {!! $heading !!}
                        </div>
                    </div>
                </div>
               {{ $slot }}
            </div>
        </div>
    </div>
</div>