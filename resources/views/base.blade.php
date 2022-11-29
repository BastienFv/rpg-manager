<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <title>@yield('title')</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <div class="container-fluid">
                <a class="navbar-brand" href="#">RPG Manager</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/home">HOME</a>
                        @if(auth()->check())
                            <a class="nav-link" href="{{ route('characters.create') }}">NEW CHARACTER</a>
                        @endif
                            <a class="nav-link" href="{{ route('characters.index') }}">CHARACTERS</a>
                        @if(auth()->check())
                            <a class="nav-link" href="{{ route('groups.create') }}">NEW GROUP</a>
                        @endif
                            <a class="nav-link" href="{{ route('groups.index') }}">GROUPS</a>
                        @if(auth()->check())
                            <a href="{{ route('logout') }}" class="btn btn-outline-light me-2">Deconnexion</a>
                        @else
                            <a class="nav-link" href="{{ route('rpg.register') }}">REGISTER</a>
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                        @endif
                    </div>
                </div> 
            </div>
        </nav>

        @yield('content')

    </body>
</html>