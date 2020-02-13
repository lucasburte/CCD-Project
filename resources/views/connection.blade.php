@extends('master')

@section('title', 'connexion')
    @section('content')
        <form action="/auth" method="post">
            @csrf
            <p>Selectionnez un utilisateur</p>
                <select name="user" id="user-select">
                    <option value="">--Please choose an option--</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->nom }}">{{ $user->nom }}</option>
                    @endforeach
            <input type="submit">
        </form>
    @endsection