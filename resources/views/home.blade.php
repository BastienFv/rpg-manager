@extends('base')

@section('title', 'RPG Manager')

@section('content')

    <h1>Home</h1>

    @if(auth()->check())
    
        <h1>Salut {{ auth()->user()->pseudo }}</h1>
    
    @endif

    <div id="carouselExampleDark" class="carousel carousel-dark slide w-50" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" >
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://sm.ign.com/t/ign_ap/screenshot/default/wow-bfa-sg-event_v458.1280.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5>Lets the battle begin !</h5>
              <p>Rejoignez la bataille.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="https://pbs.twimg.com/media/DaHWJ-5W4AAQ2t6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5>Créer ton personnage</h5>
              <p>Choisis sa classe et n'hésites pas à le faire monter en niveau !</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://o.aolcdn.com/hss/storage/midas/e81f1ef7b465c7b7b7911ba46788d82a/200580049/wow-partyfinder-epl-813.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5>Rejoignez un groupe pour vos quêtes</h5>
              <p>Unissez vous pour la bataille</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
@endsection