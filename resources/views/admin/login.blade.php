@extends('layouts.index')

@section('title', 'Авторизация | ИдёмВКино')

@section('style')
    @vite(['resources/css/admin/styles.css'])
@endsection

@section('content')
    <main>
        <section class="login">
            <header class="login__header">
                <h2 class="login__title">Авторизация</h2>
            </header>
            <div class="login__wrapper">
                <form class="login__form" action={{ route('login') }} method="POST" accept-charset="utf-8">
                    @csrf
                    <label class="login__label" for="mail">
                        E-mail
                        <input class="login__input" type="mail" placeholder="example@domain.xyz" name="mail" required>
                    </label>
                    <label class="login__label" for="pwd">
                        Пароль
                        <input class="login__input" type="password" placeholder="" name="pwd" required>
                    </label>
                    <div class="text-center">
                        <input value="Авторизоваться" type="submit" class="login__button">
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
