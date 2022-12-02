@extends('base')

@section('title', 'RPG Manager - Characters')

@section('content')

    <h1>All Characters</h1>

    @if(auth()->check())
   
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($characters as $character)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            <div class="card-body">
                                <p class="card-text">Name : {{ $character->name }}</p>
                                <p class="card-text">Description : {{ $character->description }}</p>
                                <p class="card-text">Class : {{ $character->class }}</p>

                                <br />

                                <p class="card-text">Crée le : {{ $character->created_at }}</p>
                                <p class="card-text">Modifié le : {{ $character->updated_at }}</p>
                                <div class="d-flex justify-content-between align-items-center">  
                                </div>
                                @if(auth()->check())
                                    <a href="{{ route('characters.show', $character->id) }}" class="btn btn-primary">View</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>   

        <br />
    
    @else
        <br />

        <div class="alert alert-danger"> Vous n'êtes pas enregister/connecter !</div>
    @endif
@endsection