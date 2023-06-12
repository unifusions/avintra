@props(['title' => ''])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{!! $title ? $title . ' | ' : '' !!} {{ config('app.name', 'AVNL') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="">

    <nav class="navbar navbar-dark bg-dark justify-content-between ">
        <a class="navbar-brand px-5" href="{{ route('home') }}">
            <img src="{{ asset('images/avnl_logo.jpg') }}" />
        </a>

        <div class="navbar-header">
            <h1 class="site-title">
                Armoured Vehicles Nigam Limited
            </h1>
            <h3 class="site-subtitle"> A Government of India Enterprise </h3>
            <span class="site-tagline">
                Ministry of Defence
                CIN : U35990TN2021GOI145504
            </span>
        </div>

        <div class="navbar-secondary-logo px-5">
            <img src="{{ asset('images/g20-logo.png') }}" alt="G20-summit" class="p-3">
            <img src="{{ asset('images/akam_logo.png') }}" alt="75-Azadi-Ka-Amrit-Mahotsav"/>
        </div>

    </nav>


    @include('layouts.guest-menu')


   
    <!-- Page Heading -->
    @if (isset($header))
        <header class="header-section pb-3">
            <div class="container ">
                {{ $header }}
            </div>
        </header>
    @endif

    <div class="">
        {{ $slot }}
    </div>

    @include('layouts.footer')

</body>

</html>
