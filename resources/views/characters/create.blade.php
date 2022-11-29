@extends('base')

@section('title', 'RPG Manager')

@section('content')

    @if(auth()->check())
        <h1>Salut {{ auth()->user()->id }}</h1>
    @endif
    
    <h1>Create a new character</h1>
        
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

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Magic</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Magic" name="magic" value="{{ random_int(0, 14) }}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Strength</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Strength" name="strength" value="{{ random_int(0, 14) }}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Agility</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Agility" name="agility" value="{{ random_int(0, 14) }}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Inteligence</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Inteligence" name="inteligence" value="{{ random_int(0, 14) }}">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">PV</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="PV" name="pv" value="{{ random_int(20, 50) }}">
        </div>

        <button type="submit" class="btn btn-success">Regenerate</button>
        
        <button type="submit" class="btn btn-primary">Create</button>

    </form>

@endsection