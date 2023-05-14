<x-guest-layout :title="__('Latest News & Announcements')">



    <x-page-header>
        <x-slot:heading> {{ __('All News & Announcements') }}</x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li class="active">News</li>
                </ul>
            </div>
        </div>
    </x-page-header>


    <div class="container mt-4 mb-4">

        @if (count($news) > 0)
            @foreach ($news as $key => $n)
                <div class="pb-3 mb-3 border-bottom">
                    <div class="d-flex align-items-stretch">

                        <div class="d-flex flex-column text-center me-4 "
                            style="min-width: 130px; border-right:1px solid #94701D">
                            <span class="fs-2 fw-bold text-primary">{{ $n->created_at->format('d') }}</span>
                            <span class="p-0 m-0 text-uppercase"
                                style="line-height: 0.75rem">{{ $n->created_at->format('M, Y') }}</span>

                        </div>


                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <h3>{{ $n->news_title }}</h3>
                                @if ($key < 2)
                                    <div class="badge badge-new ms-3">New</div>
                                @endif
                            </div>

                            <span>{{ $n->excerpt }}</span>
                            <a href={{ route('singlenews', $n) }}> Read More</a>
                        </div>

                    </div>

                </div>
            @endforeach
        @else
        <div class="pb-3 mb-3 border-bottom">
            <div class="d-flex align-items-stretch">

                No recents news/announcements/notices

            </div>

        </div>
        @endif


    </div>
</x-guest-layout>
