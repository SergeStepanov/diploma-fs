<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'ИдёмВКино')</title>

    @vite(['resources/css/normalize.css'])

    @yield('style')

    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic,cyrillic-ext,latin-ext"
        rel="stylesheet">

</head>

<body>
    @yield('header')

    @yield('content')

    @yield('script')

</body>

</html>
