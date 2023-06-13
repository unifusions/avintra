<x-guest-layout>
    <x-page-header>
        <x-slot:heading> {{ __('Calendar') }} </x-slot:heading>
        <div class="col-lg-12">
            <div class="breadcrumbs creote">
                <ul class="breadcrumb m-auto">
                    <li><a href="{{ route('home') }}">Home</a> </li>
                    <li class="active">Calendar</li>
                </ul>
            </div>
        </div>
    </x-page-header>
    @php
        
        $date = empty($date) ? \Carbon\Carbon::now() : \Carbon\Carbon::createFromDate($date);
        $startOfCalendar = $date
            ->copy()
            ->firstOfMonth()
            ->startOfWeek(\Carbon\Carbon::SUNDAY);
        $endOfCalendar = $date
            ->copy()
            ->lastOfMonth()
            ->endOfWeek(\Carbon\Carbon::SATURDAY);
        $dayLabels = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    @endphp
    <div class="container my-5">
        <div>

        </div>
        <div class="calendar">
            <div class="month-year">
               
                <span class="month"> {{ $date->format('M') }} </span>
                <span class="year">{{ $date->format('Y') }} </span>
            </div>
            <div class="days">
                @foreach ($dayLabels as $dayLabel)
                    <span class="day-label">{{ $dayLabel }} </span>
                @endforeach

                @while ($startOfCalendar <= $endOfCalendar)
                    @php
                        $extraClass = $startOfCalendar->format('m') != $date->format('m') ? 'dull' : '';
                        $extraClass .= $startOfCalendar->isToday() ? ' today' : '';
                    @endphp

                    <span class="day {{ $extraClass }}">
                        <div class="content">
                            <div>
                                {{ $startOfCalendar->format('d') }}
                            </div>



                        </div>
                        <div class="list-content">
                            @if (count($news) > 0)
                                @foreach ($news as $n)
                                    @if ($n->created_at->format('m') === $date->format('m'))
                                        @if ($n->created_at->format('d') === $startOfCalendar->format('d'))
                                            {{ $n->news_title }}
                                        @endif
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </span>
                    @php
                        $startOfCalendar->addDay();
                    @endphp
                @endwhile
            </div>
        </div>
    </div>


</x-guest-layout>
