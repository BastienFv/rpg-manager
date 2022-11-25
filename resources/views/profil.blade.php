@extends('base')

@section('title', 'RPG Manager - Profil')

@section('content')

<h1>profil</h1>
@if(session()->has('user'))
<h1>Salut {{ session('user')->pseudo }}</h1>
@endif
@endsection