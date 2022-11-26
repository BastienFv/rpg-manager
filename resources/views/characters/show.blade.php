@extends('base')

@section('title', 'RPG Manager - Characters')

@section('content')
    <h1>My characters</h1>

    <div class="container">
    @if(session()->has('user'))
    <h1>Salut {{ session('user')->pseudo }}</h1>
    @endif
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($character as $item)
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                <div class="card-body">
                    <p class="card-text">{{ $item->name }}</p>
                    <p class="card-text">{{ $item->description }}</p>
                    <p class="card-text">{{ $item->class }}</p>
                    <p class="card-text">{{ $item->magic }}</p>
                    <p class="card-text">{{ $item->strength }}</p>
                    <p class="card-text">{{ $item->agility }}</p>
                    <p class="card-text">{{ $item->inteligence }}</p>
                    <p class="card-text">{{ $item->pv }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('characters.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                        <form method="post" action="{{ route('characters.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>                 
                    </div>
                </div>
            </div>
        </div>

        

        @endforeach
    </div>
</div>   
@endsection