<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AVNL') }}</title>

    <!-- Fonts -->


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="{{ route('home') }}">

            <img src="{{ asset('images/avnl_logo.jpg') }}" />
        </a>

        <div class="navbar-header">
            <h1 class="site-title">
                Armoured Vehicles Nigam Limited
            </h1>
            <h3 class="site-subtitle"> A Government of India Enterprise </h3>

            Ministry of Defence
            CIN : U35990TN2021GOI145504

        </div>

        <div class="navbar-secondary-logo">
            <img src="{{ asset('images/akam_logo.png') }}" />
        </div>

    </nav>


    <nav class="navbar navbar-expand-lg secondary-navbar">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : null }}" aria-current="page" href="{{ route('home') }}">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 23 23"
                            stroke-width="1.5" stroke="currentColor" class="
                " width="25">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </a>

                </li>
            </ul>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">

                

                <!-- Left links -->
                <ul class="navbar-nav mb-2 mb-lg-0">

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Leadership</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Our Units</a>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="#">Products & Services</a>
                    </li>

                    <li class="nav-item px-2">
                        <a href="#" class="nav-link">Directory</a>
                    </li>

                    <li class="nav-item px-2">
                        <a href="#" class="nav-link">News & Announcements</a>
                    </li>

                    <!-- Navbar dropdown -->
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> --}}
                </ul>
                <!-- Left links -->
            </div>
            <ul class="navbar-nav">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>

                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}"
                                class="nav-link {{ request()->routeIs('login') ? 'active' : null }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" width="25">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                </svg>

                                Log in
                            </a>

                        </li>

                    @endauth
                @endif

            </ul>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>


    {{-- @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif --}}



    <div class="">
        {{ $slot }}
    </div>

    @include('layouts.footer')

</body>

</html>
