@extends('master')

@section('title', 'user')
    @section('content')
    <p>Nom de l'utilisateur : {{ $user->nom }}</p>   

    @endsection