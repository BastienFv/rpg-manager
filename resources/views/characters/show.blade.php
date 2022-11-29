@extends('base')

@section('title', 'RPG Manager - Characters')

@section('content')
    <h1>My characters</h1>

    @if(auth()->check())
    
        <h1>Salut {{ auth()->user()->pseudo }}</h1>
    
    @endif
       
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                    <div class="card-body">
                        <p class="card-text">Name : {{ $character->name }}</p>
                        <p class="card-text">Description : {{ $character->description }}</p>
                        <p class="card-text">Class : {{ $character->class }}</p>
                        <p class="card-text">Magic : {{ $character->magic }}</p>
                        <p class="card-text">Strength : {{ $character->strength }}</p>
                        <p class="card-text">Agility : {{ $character->agility }}</p>
                        <p class="card-text">Inteligence : {{ $character->inteligence }}</p>
                        <p class="card-text">PV : {{ $character->pv }}</p>

                        <div class="d-flex justify-content-between align-items-center">
                            @if(auth()->user()->id === $character->user_id)

                                <form method="post" action="{{ route('characters.regenerate', $character->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-primary">Regenerate</button>
                                </form>

                                <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-sm btn-primary">Edit</a>

                                <a href="{{ route('characters.edit', $character->id) }}" class="btn btn-sm btn-primary">Invite</a>

                                <form method="post" action="{{ route('characters.level', $character->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-primary">Level up</button>
                                </form>

                                <form method="post" action="{{ route('characters.destroy', $character->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>   
                            @endif              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection