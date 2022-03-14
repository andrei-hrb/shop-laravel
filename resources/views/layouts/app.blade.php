<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="bg-light d-flex flex-column">
    <header class="bg-dark font-monospace">
        <div class="container p-3">
            <a href="/" class="text-white text-decoration-none">
                <h2><i class="bi bi-box"></i> Cube Shop</h2>
            </a>
        </div>
    </header>
    <main class="container mb-5">
        @yield('content')
    </main>
    <footer class="bg-dark text-center text-white d-block p-3 font-monospace mt-auto">
        Crafted in 2022 by
        <a class="text-light" href="https://github.com/andrei-hrb">
            Hîrbu Andrei
        </a>
    </footer>
    <script src="/js/app.js"></script>
</body>

</html>
