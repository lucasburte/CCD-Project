@extends('master')

@section('title', 'connexion')
    @section('content')

    <nav class="auth bg-white mb-4 shadow">
        <div class="auth-block">
          <h3>Page de connexion :</h3>
          <form action="/auth" method="post">
            {{ csrf_field() }}

            <p>Selectionnez un utilisateur</p>
                <select name="user" id="user-select">
                    <option value="">--Please choose an option--</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->nom }}">{{ $user->nom }}</option>
                    @endforeach
            <input type="submit">
          </form>
        </div>
      </nav>
    @endsection