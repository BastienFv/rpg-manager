<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
 




    <h1>Inscription</h1>

    <form method="post" action="{{ route('rpg.store') }}">
        @csrf
        <div class="mb-1">
            <label for="lastname" class="form-label"> Nom</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('lastname') }}" class="form-control @error('lastname') is-invalid @enderror" name="lastname" id="lastname" placeholder="" />
                @error('lastname')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('firstname') }}" class="form-control @error('firstname') is-invalid @enderror" name="firstname" id="firstname" placeholder="" />
                @error('firstname')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <div class="input-group has-validation">
                <input type="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="" />
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <div class="input-group has-validation">
                <input type="text" value="{{ old('pseudo') }}" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" id="pseudo" placeholder="" />
                @error('pseudo')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="pseudo" class="form-label">Email</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="" />
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary">S'enregistrer</button>
    </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
