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
              <li><p>18h30 - 20h00</p><hr>Lorem ipsum dolor sit amet.</li>
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
              <li><p>10h00 - 12h00</p><hr>Lorem ipsum dolor sit amet.</li>
              <li><p>18h30 - 20h00</p><hr>Lorem ipsum dolor sit amet.</li>
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
              <li><p>18h30 - 20h00</p><hr>Lorem ipsum dolor sit amet.</li>
            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Samedi</header>
            <ul>
              <li><p>10h00 - 12h00</p><hr>Lorem ipsum dolor sit amet.</li>
              <li><p>12h00 - 14h00</p><hr>Lorem ipsum dolor sit amet.</li>
              <li><p>14h00 - 16h00</p><hr>Lorem ipsum dolor sit amet.</li>
              <li><p>16h00 - 17h00</p><hr>Lorem ipsum dolor sit amet.</li>
            </ul>
            <footer>.</footer>
          </div>
          <div class="list">
            <header>Dimanche</header>
            <ul>
              <li><p>10h00 - 12h00</p><hr>Lorem ipsum dolor sit amet.</li>
            </ul>
            <footer>.</footer>
          </div>
        </div>
      </div>

    </div>
    @endsection