@extends('base')

@section('title', 'RPG Manager - Groups')

@section('content')

    <h1>My groups</h1>

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>Name</th>
                <th>Description</th>
                <th>Max People</th>
                <th>Members</th>
                <th></th>
            </tr>
            <tbody>
           
                <tr class="table-stripped">
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>
                    <td>{{ $group->people }}</td>
                    <td></td>
                    <td>
                    <div class="d-flex justify-content-between align-items-center">
                        @if(auth()->user()->id === $group->user_id)
                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form method="post" action="{{ route('groups.destroy', $group->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>          
                    @endif       
                    </div>
                    </td>
                </tr>
            
            </tbody>
        </thead>
    </table>

@endsection