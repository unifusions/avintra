<nav class="navbar navbar-expand-lg secondary-navbar">
     <!-- Container wrapper -->
     <div class="container">
         <!-- Toggle button -->
         <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
             data-mdb-target="#navbarCenteredExample" aria-controls="navbarCenteredExample" aria-expanded="false"
             aria-label="Toggle navigation">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="w-6 h-6">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
             </svg>

         </button>

         <!-- Collapsible wrapper -->
         <div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">



             <!-- Left links -->
             <ul class="navbar-nav ">
                 <li class="nav-item">
                     <a class="nav-link" href="{{ route('home') }}"> {{ __('welcome.Home') }}</a>
                 </li>

                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('aboutus') }}">{{ __('welcome.About') }}</a>
                 </li>
                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('leadership') }}">{{ __('welcome.Leadership') }}</a>
                 </li>
                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('publicnews') }}">News</a>
                 </li>
                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('publicdocuments') }}">Documents</a>
                 </li>


                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('directory') }}">Directory</a>
                 </li>

                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('publicgallery') }}">Gallery</a>
                 </li>

                 <li class="nav-item px-2">
                     <a class="nav-link" href="{{ route('home') }}">CMD Message</a>
                 </li>

                 {{-- @switch(session()->get('lang'))
                     @case('en')
                         <li class="nav-item px-2">
                             <a class="nav-link" href="#">English</a>
                         </li>
                     @break

                     @case('hi')
                         <li class="nav-item px-2">
                             <a class="nav-link" href="#">Hindi</a>
                         </li>
                     @break

                     @default
                 @endswitch --}}

             </ul>
             <!-- Left links -->
             {{-- </div> --}}

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
                                     stroke-width="1.5" stroke="currentColor" width="20">
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