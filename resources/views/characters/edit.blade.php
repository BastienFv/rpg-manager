@extends('base')

@section('title', 'RPG Manager - Characters')

@section('content')

    <h1>Edit character</h1>

    <form action="{{ route('characters.update', $character->id) }}" method="post">

        @csrf
        @method('PUT')

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

        <br />
        
        <button type="submit" class="btn btn-primary">Update</button>

    </form>

@endsection