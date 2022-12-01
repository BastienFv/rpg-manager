

@extends('base')

@section('title', 'RPG Manager - Profil')

@section('content')

  <h1> LOGIN </h1>

  @if(session()->has('success'))

    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>

  @endif

  @if($errors->any())

    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $errorMessage)

          <li>{{ $errorMessage }}</li>

        @endforeach
      </ul>
    </div>
    
  @endif

  <form class="row g-3" method="post" action="{{ route('login') }}">
    @csrf
    <div class="col-4">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>
    <div class="col-4">
      <input type="password" class="form-control" name="password" id="email" placeholder="Password">
    </div>
    <div class="col-3">
      <button type="submit" class="btn btn-primary mb-3">Sign-in</button>
    </div>
  </form>

@endsection