@extends('base')

@section('title', 'RPG Manager - Profil')

@section('content')

<h1>profil</h1>
@if(auth()->check())

<h1>Salut {{ auth()->user()->pseudo }}</h1>

@endif
@endsection