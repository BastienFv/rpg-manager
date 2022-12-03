@extends('base')

@section('title', 'RPG Manager - Recruts')

@section('content')

    <h1>History</h1>

    @foreach($recruts as $recrut)

        <p>History n° {{ $recrut->id }}, créé le {{ $recrut->created_at }}</p>

        @if(auth()->check())

            <td>
                <a href="{{ route('recruts.show', $recrut->id) }}" class="btn btn-primary btn-sm">View</a>
            </td>

        @endif

    @endforeach

@endsection