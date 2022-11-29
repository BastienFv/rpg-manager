@extends('base')

@section('title', 'RPG Manager')

@section('content')

    <h1>Home</h1>

    @if(auth()->check())
    
        <h1>Salut {{ auth()->user()->pseudo }}</h1>
    
    @endif
    
@endsection