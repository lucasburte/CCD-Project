@extends('master')

@section('title', 'users')
    @section('content')

    <h3>Liste des utilisateurs :</h3>
    <ul class="liste-users">
    @foreach ($users as $user)
    <a href="/user/{{ $user->iduser }}" class="case-users bg-white mb-4 shadow">
        <span>{{ $user->nom }}</span>
    </a>
    @endforeach

</ul>

@endsection