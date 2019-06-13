<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

<nav class="" id="nav">
    <div class="row-nav">
        <a href="/"> <img  src="img/logo.png" class="logo"></a>


        <div class="link">

            @guest

                <a class="" href="{{ route('login') }}">Connexion</a>

                @if (Route::has('register'))

                    <a class="" href="{{ route('register') }}">Inscription</a>

                @endif
                <a href="panier"> Panier <i class="fas fa-shopping-basket"></i></a>
            @else

                <a href="compte"><i class='fas fa-user-alt' style='font-size:30px'></i></a>
                {{ Auth::user()->firstname }}
                <a href="panier"> Panier <i class="fas fa-shopping-basket"></i></a>
                <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                    Deconnexion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            @endguest
        </div>
    </div>
</nav>
<div id="app">

    <main class="py-4">
        @yield('content')
    </main>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>


