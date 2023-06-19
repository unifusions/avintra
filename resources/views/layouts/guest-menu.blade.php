<nav class="navbar navbar-dark bg-dark " id="brandHeader">

    <a class="navbar-brand px-5" href="{{ route('home') }}">
        <img src="{{ asset('images/avnl_logo.jpg') }}" />
    </a>

    <div class="navbar-header">
        <a class="navbar-brand mobile-logo" href="{{ route('home') }}">
            <img src="{{ asset('images/avnl_logo.jpg') }}" />
        </a>
        <div>
            <h1 class="site-title">
                Armoured Vehicles Nigam Limited
            </h1>
            <h3 class="site-subtitle"> A Government of India Enterprise </h3>
            <span class="site-tagline">
                Ministry of Defence
                CIN : U35990TN2021GOI145504
            </span>
        </div>
    </div>

    <div class="navbar-secondary-logo px-5">
        <img src="{{ asset('images/g20-logo.png') }}" alt="G20-summit" class="p-3">
        <img src="{{ asset('images/akam_logo.png') }}" alt="75-Azadi-Ka-Amrit-Mahotsav" />
    </div>

</nav>

<nav class="navbar navbar-expand-lg secondary-navbar">

    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#guestMenu"
            aria-controls="guestMenu" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>

        </button>


        <div class="collapse navbar-collapse justify-content-between" id="guestMenu">

            <ul class="navbar-nav gap-2">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}"> {{ __('welcome.Home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}">{{ __('welcome.About') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('leadership') }}">{{ __('welcome.Leadership') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publicnews') }}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publicdocuments') }}">Documents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('directory') }}">Directory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publicgallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('calendar') }}">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cmdmessage') }}" target="_blank">CMD Message</a>
                </li>
            </ul>




            <ul class="navbar-nav">
                @switch(session()->get('lang'))
                    @case('en')
                        <li class="nav-item px-2">
                            <a class="nav-link" href="{{ route('locale', 'hi') }}">Hindi</a>
                        </li>
                    @break

                    @case('hi')
                        <li class="nav-item px-2">
                            <a class="nav-link" href="{{ route('locale', 'en') }}">English</a>
                        </li>
                    @break

                    @default
                @endswitch
                {{-- @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>

                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}"
                                class="nav-link {{ request()->routeIs('login') ? 'active' : null }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="20">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>

                                Log in
                            </a>

                        </li>

                    @endauth
                @endif --}}

            </ul>

        </div>

</nav>
