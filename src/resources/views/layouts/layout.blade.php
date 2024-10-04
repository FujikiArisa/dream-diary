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
    @yield('end_head')
</head>

<body>
    <header>
        <div class="header-sp">
            <h1><a href="#">@yield('h1')</a></h1>
        </div>
        <div class="header-pc">
            <h2>@yield('h2')</h2>
        </div>
    </header>
    @yield('content')
</body>

</html>