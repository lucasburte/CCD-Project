@extends('master')
@section('title', 'connexion')
@section('content')


    @foreach ($membres as $m)
        @if ($m['role']->idrole == $user->idrole)
            @if (empty($m['user']))
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$m['role']->label}}</div>
                                    <a href="{{ route('signup', [$id_creneau, $m['role']->idrole, $_SESSION['id']]) }}?redirect={{request()->path()}}">+</a>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$m['role']->label}}</div>
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">{{$m['user']->nom}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endif
    @endforeach


    @endsection

