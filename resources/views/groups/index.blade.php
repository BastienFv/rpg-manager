@extends('base')

@section('title', 'RPG Manager - Groups')

@section('content')

    <h1>All Groups</h1>

    @if(auth()->check())

        <h1>Bonjour {{ auth()->user()->pseudo }}</h1>

    @endif

    
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>Name</th>
                <th>Description</th>
                <th>Max People</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($groups as $group)
                <tr class="table-stripped">
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>
                    <td>{{ $group->people }}</td>

                    @if(auth()->check())
                    <td>
                        <a href="{{ route('groups.show', $group->id) }}" class="btn btn-primary">View</a>
                    </td>

                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection