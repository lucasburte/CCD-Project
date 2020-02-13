<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use App\Database\Models\Inscrit;

class CreneauController extends Controller {

   public function __construct(){}

   //permet à la classe de trouver un créneau dans la base
   public function trouverCreneau($jour,$semaine,$deb,$fin) {
        $req = request();
        $resp = parent::redirectIfNeeded($req);
        if ($resp)
            return $resp;

        return view('besoin');
   }

   public function handle_($id) {
      $req = request();
      $resp = parent::redirectIfNeeded($req);
      if ($resp)
         return $resp;

      $inscrits = Inscrit::where('idcreneau', '=', $id)->get();
      if (!$inscrits)
         return response('', 404);
      $inscrits = $inscrits->each(function ($i) { return $i->role(); });

      return view('creneau', ['roles' => $inscrits]);
   }
}