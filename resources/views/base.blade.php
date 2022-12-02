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
                            <a class="nav-link" href="{{ route('profil') }}">MY ACCOUNT</a>
                        @endif

                        @if(auth()->check())
                            <a class="nav-link" href="{{ route('characters.create') }}">NEW CHARACTER</a>
                        @endif

                            <a class="nav-link" href="{{ route('characters.index') }}">CHARACTERS</a>
    
                        @if(auth()->check())
                            <a class="nav-link" href="{{ route('groups.create') }}">NEW GROUP</a>
                        @endif
                        
                            <a class="nav-link" href="{{ route('groups.index') }}">GROUPS</a>
                        
                        @if(auth()->check())
                            <a class="nav-link" href="{{ route('recruts.create') }}">JOIN GROUP</a>
                        @endif
                            
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
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <p class="col-md-4 mb-0 text-muted">&copy; 2022 RPGCompany, LTD</p>
          
              <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              </a>
          
              <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="/home" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="{{ route('profil') }}" class="nav-link px-2 text-muted">Account</a></li>
                <li class="nav-item"><a href="{{ route('rpg.register') }}" class="nav-link px-2 text-muted">Register</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link px-2 text-muted">Login</a></li>
              </ul>
            </footer>
        </div>
    </body>
</html>