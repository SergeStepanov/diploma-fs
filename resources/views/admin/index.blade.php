@extends('layouts.index')

@section('title', 'Администраторская')

@section('style')
    @vite(['resources/css/admin/styles.css'])
@endsection

@section('header')
    <header class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1 class="page-header__title">Идём<span>в</span>кино</h1>
            <span class="page-header__subtitle">Администраторская</span>
        </div>

        <div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="login__input">Выйти</button>
            </form>
            {{-- <a style="" class="conf-step__button conf-step__button-accent" href="{{ route('logout') }}">Выйти</a> --}}
        </div>
    </header>
@endsection

@section('content')
    <main class="conf-steps">

        <section class="conf-step">
            <header class="conf-step__header conf-step__header_opened">
                <h2 class="conf-step__title">Управление залами</h2>
            </header>
            <div class="conf-step__wrapper">
                <p class="conf-step__paragraph">Доступные залы:</p>
                <ul class="conf-step__list">

                    @foreach ($halls as $hall)
                        <li data-id="{{ $hall->id }}">
                            {{ $hall->name }}
                            <button class="conf-step__button conf-step__button-trash"></button>
                        </li>
                    @endforeach

                </ul>

                <button class="conf-step__button conf-step__button-accent" id="add_hall">Создать зал</button>

            </div>
        </section>

        <section class="conf-step">
            <header class="conf-step__header conf-step__header_opened">
                <h2 class="conf-step__title">Конфигурация залов</h2>
            </header>
            <div class="conf-step__wrapper">
                <p class="conf-step__paragraph">Выберите зал для конфигурации:</p>

                <ul class="conf-step__selectors-box">

                    @foreach ($halls as $hall)
                        <li><input type="radio" class="conf-step__radio" name="chairs-hall" id="{{ $hall->id }}"
                                value="{{ $hall->name }}" {{ $loop->first ? 'checked' : '' }}><span
                                class="conf-step__selector">{{ $hall->name }}</span></li>
                    @endforeach

                </ul>

                <p class="conf-step__paragraph">Укажите количество рядов и максимальное количество кресел в ряду:</p>
                <div class="conf-step__legend">
                    <label class="conf-step__label">Рядов, шт<input type="text" class="conf-step__input"
                            value="{{ $hall->rows }}" placeholder="10"></label>
                    <span class="multiplier">x</span>
                    <label class="conf-step__label">Мест, шт<input type="text" class="conf-step__input"
                            value="{{ $hall->cols }}" placeholder="8"></label>
                </div>

                <p class="conf-step__paragraph">Теперь вы можете указать типы кресел на схеме зала:</p>
                <div class="conf-step__legend">
                    <span class="conf-step__chair conf-step__chair_standart"></span> — обычные кресла
                    <span class="conf-step__chair conf-step__chair_vip"></span> — VIP кресла
                    <span class="conf-step__chair conf-step__chair_disabled"></span> — заблокированные (нет кресла)
                    <p class="conf-step__hint">Чтобы изменить вид кресла, нажмите по нему левой кнопкой мыши</p>
                </div>

                <div class="conf-step__hall">
                    <div class="conf-step__hall-wrapper">
                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_disabled"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                            <span class="conf-step__chair conf-step__chair_disabled"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                            <span class="conf-step__chair conf-step__chair_disabled"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_disabled"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_disabled"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_disabled"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_vip"></span><span
                                class="conf-step__chair conf-step__chair_vip"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_disabled"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                        </div>

                        <div class="conf-step__row">
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                            <span class="conf-step__chair conf-step__chair_standart"></span><span
                                class="conf-step__chair conf-step__chair_standart"></span>
                        </div>
                    </div>
                </div>

                <fieldset class="conf-step__buttons text-center">
                    <button class="conf-step__button conf-step__button-regular">Отмена</button>
                    <input type="submit" value="Сохранить" class="conf-step__button conf-step__button-accent">
                </fieldset>
            </div>
        </section>

        <section class="conf-step"> {{-- Конфигурация цен --}}
            <header class="conf-step__header conf-step__header_opened">
                <h2 class="conf-step__title">Конфигурация цен</h2>
            </header>
            <div class="conf-step__wrapper">
                <p class="conf-step__paragraph">Выберите зал для конфигурации:</p>
                <ul class="conf-step__selectors-box">

                    @foreach ($halls as $hall)
                        <li><input type="radio" class="conf-step__radio" name="prices-hall" id="{{ $hall->id }}"
                                value="{{ $hall->name }}" {{ $loop->first ? 'checked' : '' }}><span
                                class="conf-step__selector">{{ $hall->name }}</span></li>
                    @endforeach

                </ul>

                <p class="conf-step__paragraph">Установите цены для типов кресел:</p>
                <div class="conf-step__legend">
                    <label class="conf-step__label">Цена, рублей<input type="text" class="conf-step__input"
                            placeholder="0"></label>
                    за <span class="conf-step__chair conf-step__chair_standart"></span> обычные кресла
                </div>
                <div class="conf-step__legend">
                    <label class="conf-step__label">Цена, рублей<input type="text" class="conf-step__input"
                            placeholder="0" value="350"></label>
                    за <span class="conf-step__chair conf-step__chair_vip"></span> VIP кресла
                </div>

                <fieldset class="conf-step__buttons text-center">
                    <button class="conf-step__button conf-step__button-regular">Отмена</button>
                    <input type="submit" value="Сохранить" class="conf-step__button conf-step__button-accent">
                </fieldset>
            </div>
        </section>

        <section class="conf-step">
            <header class="conf-step__header conf-step__header_opened">
                <h2 class="conf-step__title">Сетка сеансов</h2>
            </header>
            <div class="conf-step__wrapper">
                <p class="conf-step__paragraph">
                    <button class="conf-step__button conf-step__button-accent">Добавить фильм</button>
                </p>

                <div class="conf-step__movies">

                    @foreach ($movies as $movie)
                        <div class="conf-step__movie" id="{{ $movie->id }}">
                            <img class="conf-step__movie-poster" alt="{{ $movie->poster }}" src="img/admin/poster.png">
                            <h3 class="conf-step__movie-title">{{ $movie->title }}</h3>
                            <p class="conf-step__movie-duration">{{ $movie->duration }} минут</p>
                        </div>
                    @endforeach

                </div>

                <div class="conf-step__seances">
                    <div class="conf-step__seances-hall">
                        <h3 class="conf-step__seances-title">Зал 1</h3>
                        <div class="conf-step__seances-timeline">
                            <div class="conf-step__seances-movie"
                                style="width: 60px; background-color: rgb(133, 255, 137); left: 0;">
                                <p class="conf-step__seances-movie-title">Миссия выполнима</p>
                                <p class="conf-step__seances-movie-start">00:00</p>
                            </div>
                            <div class="conf-step__seances-movie"
                                style="width: 60px; background-color: rgb(133, 255, 137); left: 360px;">
                                <p class="conf-step__seances-movie-title">Миссия выполнима</p>
                                <p class="conf-step__seances-movie-start">12:00</p>
                            </div>
                            <div class="conf-step__seances-movie"
                                style="width: 65px; background-color: rgb(202, 255, 133); left: 420px;">
                                <p class="conf-step__seances-movie-title">Звёздные войны XXIII: Атака клонированных клонов
                                </p>
                                <p class="conf-step__seances-movie-start">14:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="conf-step__seances-hall">
                        <h3 class="conf-step__seances-title">Зал 2</h3>
                        <div class="conf-step__seances-timeline">
                            <div class="conf-step__seances-movie"
                                style="width: 65px; background-color: rgb(202, 255, 133); left: 595px;">
                                <p class="conf-step__seances-movie-title">Звёздные войны XXIII: Атака клонированных клонов
                                </p>
                                <p class="conf-step__seances-movie-start">19:50</p>
                            </div>
                            <div class="conf-step__seances-movie"
                                style="width: 60px; background-color: rgb(133, 255, 137); left: 660px;">
                                <p class="conf-step__seances-movie-title">Миссия выполнима</p>
                                <p class="conf-step__seances-movie-start">22:00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <fieldset class="conf-step__buttons text-center">
                    <button class="conf-step__button conf-step__button-regular">Отмена</button>
                    <input type="submit" value="Сохранить" class="conf-step__button conf-step__button-accent">
                </fieldset>
            </div>
        </section>

        <section class="conf-step">
            <header class="conf-step__header conf-step__header_opened">
                <h2 class="conf-step__title">Открыть продажи</h2>
            </header>
            <div class="conf-step__wrapper text-center">
                <p class="conf-step__paragraph">Всё готово, теперь можно:</p>
                <button class="conf-step__button conf-step__button-accent">Открыть продажу билетов</button>
            </div>
        </section>

    </main>

@endsection

{{-- @include('admin.popups.add_movie') --}}
{{-- @include('admin.popups.add_hall') --}}
{{-- @include('admin.popups.add_session') --}}
{{-- @include('admin.popups.delete_hall') --}}
{{-- @include('admin.popups.delete_session') --}}
