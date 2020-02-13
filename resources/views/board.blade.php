@extends('master')

@section('title', 'Connexion')
    @section('content')
    <div class="ui">
        <nav class="navbar app">Créneaux (S1)</nav>
        <nav class="navbar board"></nav>
        <div class="lists">
          <div class="list">
            <header>Lundi</header>
            <ul>

              <!--bouton pour s'inscrire-->

              @foreach ($creneaux as $creneau)
                @if ($creneau->jour == 1)
                  <form action="" method="post">

                    <li><p>{{$creneau->heureDebut}} - {{$creneau->heureFin}}</p>
                      <hr>{{$creneau->debut}}
                      <a href="" class="btn btn-success btn-circle" type="submit">
                        <i class="fas fa-check"></i>
                      </a></li>
                  </form>
                @endif                  
              @endforeach
            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Mardi</header>
            <ul>
            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Mercredi</header>
            <ul>

            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Jeudi</header>
            <ul>
            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Vendredi</header>
            <ul>
            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Samedi</header>
            <ul>

            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Dimanche</header>
            <ul>
            </ul>
            <footer>.</footer>
          </div>
        </div>
      </div>

    </div>
    @endsection