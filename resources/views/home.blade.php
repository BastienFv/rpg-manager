@extends('base')

@section('title', 'RPG Manager')

@section('content')

    <h1>Home</h1>

    @if(session()->has('user'))
    
    <h1>Salut {{ session('user')->pseudo }}</h1>
    
    @endif
    
@endsection