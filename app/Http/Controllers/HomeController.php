<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Database\Models\Creneau;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $req = request();
        $resp = parent::redirectIfNeeded($req);
        if ($resp)
            return $resp;

        $creneaux = Creneau::get()->all();

        $array = [1 => 'Lundi', 2 => 'Mardi', 3 => 'Mercredi', 4 => 'Jeudi', 5 => 'Vendredi', 6 => 'Samedi', 7 => 'Dimanche'];

        //($creneaux);

        //$Inscrit = Inscrit::where('idCreneau', '=', );
        return view('board', ['creneaux' => $creneaux, 'array' => $array]);
    }
}