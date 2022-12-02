@extends('base')

@section('title', 'RPG Manager - Recruts')

@section('content')

    <h1>Join a group</h1>

    <form action="{{ route('recruts.store') }}" method="post">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <select class="form-select" name="group_id" aria-label="Default select example">
            <option selected>Choose your group</option>
            
            @foreach($group as $team)
                <option value="{{ $team->id }}" > 
                    {{ $team->id}}-{{ $team->name }}
                </option>
            @endforeach
        </select>

        <br />

        <select class="form-select" name="character_id" aria-label="Default select example">
            <option selected>Choose your character</option>
            
            @foreach($character as $option)
                <option value="{{ $option->id }}" > 
                    {{ $option->id}}-{{ $option->name }}  ({{ $option->class }})
                </option>
            @endforeach
        </select>

        <br />
        
        <div class="row align-item-center">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>

    </form>

@endsection