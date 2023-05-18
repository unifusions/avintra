<nav id="sidebarMenu" class="col-md-2  d-md-block bg-dark sidebar collapse sidebar-menu">

    <div class="d-flex justify-content-between align-items-center bg-dark">
        <img src="{{ asset('images/avnl_logo.jpg') }}" alt="" width="125">
        <div>
            <h5 class="text-white">
                Armoured Vehicles Nigam Limited
            </h5>


        </div>
    </div>
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : null }}" aria-current="page"
                    href="{{ route('dashboard') }}">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>

                    {{ __('Dashboard') }}
                </a>
            </li>


            <li class="nav-item ">

                <a class="nav-link {{ request()->routeIs('documents.*') ? ' active' : null }}" data-bs-toggle="collapse"
                    data-bs-target="#documents-collapse" aria-expanded="true">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.2"
                        stroke="currentColor" width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94A3 3 0 1119.5 7.372L8.552 18.32m.009-.01l-.01.01m5.699-9.941l-7.81 7.81a1.5 1.5 0 002.112 2.13" />
                    </svg>

                    {{ __('Documents') }}
                </a>


                <div class="collapse py-1 {{ request()->routeIs('documents.*') ? 'show active' : null }} "
                    id="documents-collapse" style="">
                    <ul class="btn-toggle-nav flex-column sub-nav">
                        <li class="nav-item small mb-2"><a href="{{ route('documents.index') }}"
                                class=" {{ request()->routeIs('documents.index') ? 'active fw-bold' : null }}">All
                                Documents</a></li>
                        <li class="nav-item small  mb-2"><a href="{{ route('documents.create') }}"
                                class=" {{ request()->routeIs('documents.create') ? 'active fw-bold' : null }}">New
                                Document</a></li>

                        <li class="nav-item small  mb-2"><a href="{{ route('documents.archive') }}"
                                class=" {{ request()->routeIs('documents.archive') ? 'active fw-bold' : null }}">Archive</a>
                        </li>

                        <li class="nav-item small mb-2"><a href="{{ route('documents.trash') }}"
                                class=" {{ request()->routeIs('documents.trash') ? 'active fw-bold' : null }}">Trash</a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="nav-item">


                <a class="nav-link {{ request()->routeIs('division.*') || request()->routeIs('section.*')  ? ' active' : null }}" data-bs-toggle="collapse"
                    data-bs-target="#division-collapse" aria-expanded="true">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 01-1.125-1.125v-3.75zM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-8.25zM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 01-1.125-1.125v-2.25z" />
                    </svg>

                    {{ __('Divisions & Sections') }}
                </a>



                <div class="collapse py-1 {{ request()->routeIs('division.*') || request()->routeIs('section.*') ? 'show active' : null }} "
                    id="division-collapse" style="">
                    <ul class="btn-toggle-nav flex-column sub-nav">
                        <li class="nav-item small mb-2"><a href="{{ route('division.index') }}"
                                class="link-dark {{ request()->routeIs('division.index') ? 'active fw-bold' : null }}">All
                                Divisions</a></li>
                        <li class="nav-item small  mb-2"><a href="{{ route('division.create') }}"
                                class="link-dark {{ request()->routeIs('division.create') ? 'active fw-bold' : null }}">New
                                Division</a></li>

                        <li class="nav-item small  mb-2"><a href="{{ route('section.index') }}"
                                class="link-dark {{ request()->routeIs('section.index') ? 'active fw-bold' : null }}">Sections</a>
                        </li>

                    </ul>
                </div>
            </li>



            <li class="nav-item">


                <a class="nav-link {{ request()->routeIs('wordoftheday.*') ? ' active' : null }}"
                    data-bs-toggle="collapse" data-bs-target="#words-collapse" aria-expanded="true">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
                    </svg>

                    {{ __('Word of the Day') }}
                </a>



                <div class="collapse py-2 {{ request()->routeIs('wordoftheday.*') ? 'show active' : null }} "
                    id="words-collapse" style="">
                    <ul class="btn-toggle-nav flex-column sub-nav">
                        <li class="nav-item small mb-2"><a href="{{ route('wordoftheday.index') }}"
                                class="link-dark {{ request()->routeIs('wordoftheday.index') ? 'active fw-bold' : null }}">All
                                Words</a></li>
                        <li class="nav-item small  mb-2"><a href="{{ route('wordoftheday.create') }}"
                                class="link-dark {{ request()->routeIs('wordoftheday.create') ? 'active fw-bold' : null }}">New
                                Word of the day</a></li>





                    </ul>
                </div>

            </li>





            <li class="nav-item">

                <a class="nav-link {{ request()->routeIs('news.*') ? ' active' : null }}" data-bs-toggle="collapse"
                    data-bs-target="#news-collapse" aria-expanded="true">

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" height=24 width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                    {{ __('News & Announcements') }}
                </a>


                <div class="collapse py-2 {{ request()->routeIs('news.*') ? 'show active' : null }} "
                    id="news-collapse" style="">
                    <ul class="btn-toggle-nav flex-column sub-nav">
                        <li class="nav-item small mb-2"><a href="{{ route('news.index') }}"
                                class="link-dark {{ request()->routeIs('news.index') ? 'active fw-bold' : null }}">All
                                News & Annnouncement</a></li>
                        <li class="nav-item small  mb-2"><a href="{{ route('news.create') }}"
                                class="link-dark {{ request()->routeIs('news.create') ? 'active fw-bold' : null }}">Add
                                News</a></li>
                        {{-- <li class="nav-item small"><a href="#" class="link-dark {{ request()->routeIs('documents.index') ? 'active fw-bold' : null }}">Archive</a></li>
                    <li class="nav-item small"><a href="#" class="link-dark {{ request()->routeIs('documents.delete') ? 'active fw-bold' : null }}">Trash</a></li> --}}
                    </ul>
                </div>
            </li>



            <li class="nav-item {{ request()->routeIs('gallery.index') ? 'active' : null }}">


                <a class="nav-link {{ request()->routeIs('gallery.*') ? ' active' : null }}"
                    data-bs-toggle="collapse" data-bs-target="#gallery-collapse" aria-expanded="true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>

                    {{ __('Gallery') }}
                </a>


                <div class="collapse py-2 {{ request()->routeIs('gallery.*') ? 'show active' : null }} "
                    id="gallery-collapse" style="">
                    <ul class="btn-toggle-nav flex-column sub-nav">
                        <li class="nav-item small mb-2"><a href="{{ route('gallery.index') }}"
                                class="link-dark {{ request()->routeIs('gallery.index') ? 'active fw-bold' : null }}">
                                Gallery
                            </a></li>
                        <li class="nav-item small  mb-2"><a href="{{ route('gallery.create') }}"
                                class="link-dark {{ request()->routeIs('gallery.create') ? 'active fw-bold' : null }}">Add
                                New Gallery</a></li>
                        {{-- <li class="nav-item small"><a href="#" class="link-dark {{ request()->routeIs('documents.index') ? 'active fw-bold' : null }}">Archive</a></li> --}}
                        <li class="nav-item small"><a href="#"
                                class="link-dark {{ request()->routeIs('gallery.delete') ? 'active fw-bold' : null }}">Trash</a>
                        </li>
                    </ul>
                </div>

            </li>


            <li class="nav-item {{ request()->routeIs('user.index') ? 'active' : null }}">


                <a class="nav-link {{ request()->routeIs('user.*') ? ' active' : null }}" data-bs-toggle="collapse"
                    data-bs-target="#user-collapse" aria-expanded="true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" width=24>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>

                    {{ __('Users') }}
                </a>


                <div class="collapse py-2 {{ request()->routeIs('user.*') ? 'show active' : null }} "
                    id="user-collapse" style="">
                    <ul class="btn-toggle-nav flex-column sub-nav">
                        <li class="nav-item small mb-2"><a href="{{ route('user.index') }}"
                                class="link-dark {{ request()->routeIs('user.index') ? 'active fw-bold' : null }}">
                                All Users
                            </a></li>
                        <li class="nav-item small  mb-2"><a href="{{ route('user.create') }}"
                                class="link-dark {{ request()->routeIs('user.create') ? 'active fw-bold' : null }}">Add
                                New User</a></li>
                        {{-- <li class="nav-item small"><a href="#" class="link-dark {{ request()->routeIs('documents.index') ? 'active fw-bold' : null }}">Archive</a></li> --}}

                    </ul>
                </div>

            </li>


        



        </ul>

       
    </div>
</nav>
