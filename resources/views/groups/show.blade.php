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
                <th>Created</th>
                <th>Updated</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <tr class="table-stripped">
                <td>{{ $group->id }}</td>
                <td>{{ $group->name }}</td>
                <td>{{ $group->description }}</td>
                <td>{{ $group->people }}</td>
                <td>{{ $recrut->character_id }}</td>
                <td>{{ $group->created_at }} </td>
                <td>{{ $group->updated_at }} </td>

                @if(auth()->user()->id === $group->user_id)
                    <td>
                        <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('groups.destroy', $group->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>    
                    </td>
                @endif       
            </tr>
        </tbody>
    </table>

@endsection