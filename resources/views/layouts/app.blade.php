<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <script defer src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/app.css" data-turbolinks-track="true">
</head>

<body>
    <header>
        <div>
            <a href="/">
                <h2><i class="bi bi-box"></i><span>Cube Shop</span></h2>
            </a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <small>
            Crafted in 2022 by
            <a href="https://github.com/andrei-hrb">Hîrbu Andrei</a>
        </small>
    </footer>
</body>

</html>
