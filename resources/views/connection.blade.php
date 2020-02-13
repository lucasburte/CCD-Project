@extends('master')

@section('title', 'connexion')
    @section('content')

    <nav class="block bg-white mb-4 shadow">
          <h3>Page de connexion :</h3>
          <form action="{{ route('auth') }}" method="get">
            {{ csrf_field() }}

            <!--<p>Selectionnez un utilisateur</p>-->
            <select name="user" id="user-select">
                <option value="">--Selectionnez un utilisateur--</option>
                @foreach ($users as $user)
                    <option value="{{ $user->iduser }}">{{ $user->nom }}</option>
                @endforeach

            </select>

            <input type="hidden" value="{{ $route }}" name="redirect">

            <input type="submit">
          </form>
      </nav>
    @endsection