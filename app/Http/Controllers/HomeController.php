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
        return view('board', ['creneaux' => $creneaux]);
    }
}