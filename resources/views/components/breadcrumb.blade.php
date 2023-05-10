<nav aria-label="breadcrumb" class="">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}"> Home </a>
        </li>
        @for ($i = 1; $i <= count(Request::segments()); $i++)
            <li class="breadcrumb-item {{ $i === count(Request::segments()) ? 'active' : '' }}">
                @if ($i === count(Request::segments()))
                    {{ ucfirst(Request::segment($i)) }}
                @else
                    <a href="{{ URL::to(implode('/', array_slice(Request::segments(), 0, $i, true))) }}">
                        {{ ucfirst(Request::segment($i)) }}
                    </a>
                @endif

            </li>
        @endfor
    </ol>
</nav>
