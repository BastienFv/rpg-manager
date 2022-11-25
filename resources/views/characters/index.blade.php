@extends('base')

@section('title', 'RPG Manager - Characters')

@section('content')

<h1>All Characters</h1>

<div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($characters as $character)
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                    <p class="card-text">{{ $character->name }}</p>
                    <p class="card-text">{{ $character->description }}</p>
                    <p class="card-text">{{ $character->class }}</p>
                    <p class="card-text">{{ $character->magic }}</p>
                    <p class="card-text">{{ $character->strength }}</p>
                    <p class="card-text">{{ $character->agility }}</p>
                    <p class="card-text">{{ $character->inteligence }}</p>
                    <p class="card-text">{{ $character->pv }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>    

@endsection