@extends('base')

@section('title', 'RPG Manager - Groups')

@section('content')

    <h1>Create a new group</h1>

    <form action="{{ route('groups.store') }}" method="post">
        
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Group name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Group name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" placeholder="Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">People</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="people" min="1" placeholder="People">
        </div>
        <br>
        <div class="row align-item-center">
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
    </form>
@endsection