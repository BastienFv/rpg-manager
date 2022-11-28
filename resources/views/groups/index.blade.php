@extends('base')

@section('title', 'RPG Manager - Groups')

@section('content')

<h1>All Groups</h1>

@if(session()->has('user'))

    <h1>Bonjour {{ session('user')->pseudo }}</h1>

@endif

    
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
                    @if(session()->has('user'))
                    <td>
                        <a href="{{ route('groups.show', $group->id) }}" class="btn btn-primary">View</a>
                    </td>
                    @endif
                </tr>

            @endforeach
            </tbody>
        </thead>
    </table>

@endsection