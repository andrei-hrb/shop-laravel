<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <script defer src="/js/app.js"></script>
    <link rel="stylesheet" href="/css/app.css" data-turbolinks-track="true">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <header>
        <nav>
            <div>
                <a href="/">
                    <h2><i class="bi bi-box"></i><span>Cube Shop</span></h2>
                </a>
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarNav">
                    <ul>
                        <li>
                            <a class="@if (Request::route()->getName() === 'home') active @endif" aria-current="page" href="/shop">
                                Home
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle @if (Request::route()->getName() === 'category') active @endif" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (\App\Models\Category::getAll() as $category)
                                    <li>
                                        <a class="dropdown-item" href="/category/{{ $category }}">
                                            {{ $category }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a class="@if (Request::route()->getName() === 'cart') active @endif" aria-current="page" href="/cart">
                                Cart (<span id="count">{{ \Cart::count() }}</span>)
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
