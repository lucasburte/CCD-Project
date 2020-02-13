@extends('master')

@section('title', 'Connexion')
    @section('content')
    <div class="ui">
        <nav class="navbar app">Créneaux (S1)</nav>
        <nav class="navbar board"></nav>
        <div class="lists">
          @foreach ($array as $key=>$item)
          <div class="list">   
              <header>{{$item}}</header>
              <ul>
                @foreach ($creneaux as $creneau)
                  @if ($creneau->jour == $key)
                      <li>
                        <hr>{{$creneau['debut']}}h - {{$creneau['fin']}}h
                        <br>
                        <a href={{ route('creneau', ['id' => $creneau->idcreneau]) }} class="btn btn-info btn-circle" type="submit">
                          <i class="fas fa-info"></i>
                        </a>
                      </li>
                  @endif                  
              @endforeach
            </ul>
            <footer>.</footer>
          </div>
          @endforeach
        </div>
    </div>
    @endsection