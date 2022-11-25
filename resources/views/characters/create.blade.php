@extends('base')

@section('title', 'RPG Manager')

@section('content')
@if(session()->has('user'))
<h1>Salut {{ session('user')->id }}</h1>
@endif
    <h1>Create a new characters</h1>
        
    <form action="{{ route('characters.store') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name" >
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="description" ></textarea>
        </div>
        <select class="form-select" name="class" aria-label="Default select example">
            <option selected>Choose your class</option>
            <option value="Warrior">Warrior</option>
            <option value="Wizzard">Wizzard</option>
            <option value="Druid">Druid</option>
            <option value="Assassin">Assassin</option>
            <option value="Berserker">Berserker</option>
            <option value="Archer">Archer</option>
        </select>
        

        <button type="submit" class="btn btn-primary">Create</button>

    </form>

@endsection