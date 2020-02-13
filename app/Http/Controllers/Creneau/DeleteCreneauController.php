<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use App\Database\Models\Creneau;

use Illuminate\Http\Request;

class DeleteCreneauController extends CreneauController {
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();
        $resp = parent::handle($request);
        if ($resp)
            return $resp;

        //trouver le  creneau concerné
        $creneau =  parent::trouverCreneau($request->jour,$request->semaine,$request->deb,$request->fin);
        //supprimer le creneau
        $creneau->delete();
    }
}
