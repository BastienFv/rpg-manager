@extends('base')

@section('title', 'RPG Manager - Characters')

@section('content')

<h1>All Characters</h1>


<div class="container">
    @if(session()->has('user'))

    <h1>Salut {{ session('user')->pseudo }}</h1>
    
    @endif
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($characters as $character)
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                    <p class="card-text">{{ $character->name }}</p>
                    <p class="card-text">{{ $character->description }}</p>
                    <p class="card-text">{{ $character->class }}</p>
                    <div class="d-flex justify-content-between align-items-center">  
                    </div>
                    @if(session()->has('user'))
                    <a href="{{ route('characters.show', $character->id) }}" class="btn btn-primary">View </a>
                    @endif
                </div>
            </div>
        </div>
        
        
        
        @endforeach
    </div>
</div>   

<br />


@endsection