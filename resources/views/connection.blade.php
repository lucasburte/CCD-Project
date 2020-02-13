@extends('master')

@section('title', 'connexion')
    @section('content')
        <form action="/auth" method="post">
            @csrf
            <p>Selectionnez un utilisateur</p>

            <li><a href="#">Lien menu 1</a>
                <ul>
                    <li><a href="#">lien sous menu 1</a></li>
                    <li><a href="#">lien sous menu 1</a></li>
                    <li><a href="#">lien sous menu 1</a></li>
                    <li><a href="#">lien sous menu 1</a></li>
                </ul>
            </li>
{{--             @foreach ($users as $user)
            <div>
                <input type="radio" id="huey" name="users" value="huey">
                <label for="huey"></label>
            </div>
            @endforeach --}}
            
        </form>
    @endsection