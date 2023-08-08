<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>
    
    @vite(["resources/css/normalize.css"])

    @yield('style')

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">

</head>

<body>
    <header class="page-header">
        <h1 class="page-header__title">Идём<span>в</span>кино</h1>
        {{-- <span class="page-header__subtitle">Администраторррская</span> --}}
    </header>


    @yield('content')

    <footer style="text-align: center; border-top: 1px solid;">

        <h4 class="page-header__title">&copy Идём<span>в</span>кино {{ now()->format('Y') }}</h4>

    </footer>

</body>

</html>
