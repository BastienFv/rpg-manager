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
                        <a class="nav-link" href="{{ route('characters.index') }}">CHARACTERS</a>
                        <a class="nav-link" href="{{ route('groups.index') }}">GROUPS</a>
                        <a class="nav-link" href="{{ route('users.index') }}">REGISTER</a>
                    </div>
                </div>
                <form class="row g-3">
                    <div class="col-4">
                      <input type="email" class="form-control" id="inputPassword2" placeholder="Email">
                    </div>
                    <div class="col-4">
                      <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <div class="col-3">
                      <button type="submit" class="btn btn-primary mb-3">Sign-in</button>
                    </div>
                </form>
            </div>
        </nav>

        @yield('content')

    </body>
</html>