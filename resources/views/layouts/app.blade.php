<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AVNL') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="dashboard">

    @include('layouts.navigation')

    
    <div class="container-fluid">
        <div class="row">
           
            {{-- SideBar --}}
            @include('layouts.sidebar')

            {{-- Main Content --}}
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="">
                            <div class="">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
                </div>
                <div>
                    {{ $slot }}
                </div>


            </main>
        </div>
      




    </div>
</body>

</html>
