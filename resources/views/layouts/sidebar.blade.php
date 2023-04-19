<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : null }}" aria-current="page"
                    href="{{ route('dashboard') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    {{ __('Dashboard') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('documents.index') ? 'active' : null }}" href="{{ route('documents.index') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    {{ __('Documents') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('division.index') ? 'active' : null }}"
                    href="{{ route('division.index') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    {{ __('Divisions & Sections') }}
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('wordoftheday.index') ? 'active' : null }}"
                    href="{{ route('wordoftheday.index') }}">
                    <span data-feather="file" class="align-text-bottom"></span>
                    {{ __('Word of the Day') }}
                </a>
            </li>

            
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('news.index') ? 'active' : null }}" href="{{ route('news.index') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    {{ __('News & Announcements') }}
                </a>
            </li>

            <li class="nav-item {{ request()->routeIs('gallery.index') ? 'active' : null }}">
                <a class="nav-link" href="{{ route('gallery.index') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    {{ __('Gallery') }}
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users" class="align-text-bottom"></span>
                    {{ __('Users') }}
                </a>
            </li>


        </ul>

        {{-- <h6
            class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle" class="align-text-bottom"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Year-end sale
                </a>
            </li>
        </ul> --}}
    </div>
</nav>
