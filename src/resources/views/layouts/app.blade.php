<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <a class="header__link" href=""><img class="header__img" src="{{ asset('items/logo.png') }}" alt="ロゴ"></a>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>