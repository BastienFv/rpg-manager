@extends('base')

@section('title', 'RPG Manager - Profil')

@section('content')


@if(auth()->check())

<h1>Salut {{ auth()->user()->pseudo }} !</h1>
<h2>Infos du compte : </h2>
<label for="lastname">Nom : </label>
<input class="form-control" type="text" name="lastname" value="{{ auth()->user()->lastname }}" aria-label="readonly input example" readonly>

<label for="firstname">Prénom : </label>
<input class="form-control" type="text" name="firstname" value="{{ auth()->user()->firstname }}" aria-label="readonly input example" readonly>

<label for="email">Email : </label>
<input class="form-control" type="text" name="email" value="{{ auth()->user()->email }}" aria-label="readonly input example" readonly>

@endif
@endsection