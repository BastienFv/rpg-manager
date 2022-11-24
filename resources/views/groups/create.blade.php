@extends('base')

@section('title', 'RPG Manager - Groups')

@section('content')

    <form action="" method="post">

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Group name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Group name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Places</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Places">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
    </form>
@endsection