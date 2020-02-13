@extends('master')

@section('title', 'user', '')
    @section('content')
    <div class="info">
        <h1>Information sur l'utilisateur :</h1>
        <p>Nom de l'utilisateur : {{ $user->nom }}</p> 
        <p>Role : {{ $role->label }}</p> 
        <p>Description du role : {{ $role->description }}</p> 
    </div>

    @endsection