<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text&display=swap" rel="stylesheet">
    @yield('css')
</head>

    <body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo" >
            FashionablyLate
            </div>
            <nav>
            <ul class="header-nav">
                @if (Auth::check())
                <li class="header-nav__item">
                </li>
                <li class="header-nav__item">
                <form class="form" action="/logout" method="post">
                @csrf
                    <a class="header-nav__button" href="/login" >ログアウト</a>
                </form>
                </li>
                @endif
            </ul>
            </nav>
        </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
