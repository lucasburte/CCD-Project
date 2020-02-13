@extends('master')

@section('title', 'user')
    @section('content')
    <p>Nom de l'utilisateur : {{ $user->nom }}</p> 
    <p>Role : {{ $role->label }}</p>  

    @endsection