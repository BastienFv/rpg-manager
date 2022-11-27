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
            </tr>
            <tbody>
            @foreach($group as $item)
                <tr class="table-stripped">
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->people }}</td>
                    <td>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('groups.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form method="post" action="{{ route('groups.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>                 
                    </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </thead>
    </table>

@endsection