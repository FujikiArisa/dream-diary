<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- head end -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alice&family=Kiwi+Maru:wght@300;400&display=swap" rel="stylesheet">
    <!-- google fonts end -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- material symbols end -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.css">
    <!-- reset css end -->
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
    <!-- font awsome -->
    @yield('end_head')
</head>

<body>
    <header>
        <div class="header-sp">
            <h1><a href="#">@yield('h1')</a></h1>
        </div>
        <div class="header-pc">
            <h1><a href="#"><img src="/static/images/common/logo.svg" alt=""></a></h1>
            <h2><a href="#">@yield('h2')</a></h2>
            <div>
                <a href="#"><span class="material-symbols-outlined">favorite</span></a>
                <a href="{{ route('search') }}"><span class="material-symbols-outlined">search</span></a>
                <a href="#" class="menu-btn"><span class="material-symbols-outlined">menu</span></a>
            </div>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('mypage') }}"><img src="/static/images/mypage/icon.svg" alt="">
                        <p>ふじき</p>
                    </a></li>
                <li><a href="{{ route('note') }}">NOTE</a></li>
                <li><a href="{{ route('top') }}">CALENDAR</a></li>
                <li><a href="#">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <nav class="menu-sp">
        <div>
            <ul>
                <li>
                    <a href="{{ route('top') }}">
                        <span class="material-symbols-outlined">calendar_month</span>
                        カレンダー
                    </a>
                </li>
                <li>
                    <a href="{{ route('note') }}">
                        <span class="material-symbols-outlined">description</span>
                        ノート
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="{{ route('search') }}">
                        <span class="material-symbols-outlined">search</span>
                        検索
                    </a>
                </li>
                <li>
                    <a href="{{ route('mypage') }}">
                        <img src="/static/images/mypage/icon.svg" alt="">
                        マイページ
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="add"><a href="{{ route('create') }}"></a></div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('static/js/main.js') }}"></script>
</body>

</html>