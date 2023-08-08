@extends('layouts.index')

@section('style')
    @vite(['resources/css/client/styles.css'])
@endsection

@section('header')
    <header class="page-header">
        <h1 class="page-header__title">Идём<span>в</span>кино</h1>
    </header>
@endsection

@section('content')
    <main>
        <section class="ticket">

            <header class="tichet__check">
                <h2 class="ticket__check-title">Вы выбрали билеты:</h2>
            </header>

            <div class="ticket__info-wrapper">
                <p class="ticket__info">На фильм: <span class="ticket__details ticket__title">Звёздные войны XXIII:
                        Атака клонированных клонов</span></p>
                <p class="ticket__info">Места: <span class="ticket__details ticket__chairs">6, 7</span></p>
                <p class="ticket__info">В зале: <span class="ticket__details ticket__hall">1</span></p>
                <p class="ticket__info">Начало сеанса: <span class="ticket__details ticket__start">18:30</span></p>
                <p class="ticket__info">Стоимость: <span class="ticket__details ticket__cost">600</span> рублей</p>

                <button class="acceptin-button" onclick="location.href='ticket.html'">Получить код бронирования</button>

                <p class="ticket__hint">После оплаты билет будет доступен в этом окне, а также придёт вам на почту.
                    Покажите QR-код нашему контроллёру у входа в зал.</p>
                <p class="ticket__hint">Приятного просмотра!</p>
            </div>
        </section>
    </main>
@endsection
