@extends('base')

@section('title', 'RPG Manager - Groups')

@section('content')

<h1>All Groups</h1>
<a href="{{ route('groups.create') }}" class="btn btn-primary">Create</a>
<a href="{{ route('groups.show', $groups[0]->user_id) }}" class="btn btn-primary">My groups</a>

    
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>Name</th>
                <th>Description</th>
                <th>Max People</th>
            </tr>
            <tbody>
            @foreach($groups as $group)
                <tr class="table-stripped">
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>
                    <td>{{ $group->people }}</td>
                </tr>
            @endforeach
            </tbody>
        </thead>
    </table>

@endsection