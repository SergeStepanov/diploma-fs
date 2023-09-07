@extends('layouts.index')

@section('style')
    @vite(['resources/css/client/styles.css'])
@endsection

@section('script')
    @vite(['resources/js/client/nav.js'])
@endsection


@section('header')
    <header class="page-header">
        <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    </header>
@endsection

@section('content')
    <nav class="page-nav">
        @for ($i = 0; $i < 6; $i++)
            {{-- page-nav__day_chosen  page-nav__day_today  --}}
            <a class="page-nav__day" id="{{ $i }}" href="#">
                <span class="page-nav__day-week">
                    {{ mb_convert_case(Date::now()->addDays($i)->format('D'),MB_CASE_TITLE) }}
                </span>
                <span class="page-nav__day-number">
                    {{ Date::now()->addDays($i)->format('d') }}
                </span>
            </a>
        @endfor
        <a class="page-nav__day page-nav__day_next" href="#">
        </a>
    </nav>

    <main>
        @empty($movies)
            <section class="movie">
                <div class="movie__description">
                    <p class="movie__synopsis">Сеансы отсутствуют</p>
                </div>
            </section>
        @endempty

        {{-- @foreach ($movies as $item)
            section class="movie">
            <div class="movie__info">
                <div class="movie__poster">
                    <img class="movie__poster-image" alt="Звёздные войны постер" src="img/client/poster1.jpg">
                </div>
                <div class="movie__description">
                    <h2 class="movie__title">{{ $item->title }}</h2>
                    <p class="movie__synopsis">{{ $item->description }}</p>
                    <p class="movie__data">
                        <span class="movie__data-duration">{{ $item->duration }} минут</span>
                        <span class="movie__data-origin">{{ $item->country }}</span>
                    </p>
                </div>
            </div>

            <div class="movie-seances__hall">
                <h3 class="movie-seances__hall-title">Зал 1</h3>
                <ul class="movie-seances__list">
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">10:20</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">14:10</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">18:40</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">22:00</a></li>
                </ul>
            </div>
            <div class="movie-seances__hall">
                <h3 class="movie-seances__hall-title">Зал 2</h3>
                <ul class="movie-seances__list">
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">11:15</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">14:40</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">16:00</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">18:30</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">21:00</a></li>
                    <li class="movie-seances__time-block"><a class="movie-seances__time" href="hall.html">23:30</a></li>
                </ul>
            </div>
            </section>
        @endforeach --}}

    </main>
@endsection
