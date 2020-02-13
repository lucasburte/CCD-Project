<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use App\Database\Models\Inscrit;
use App\Database\Models\Role;
use App\Database\Models\User;

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

      $membres = [];
      foreach ($inscrits as $i) {
         $membres[] = ['role' => $i->role(), 'user' => $i->user()];
      }

      $u = User::where('iduser', '=', $_SESSION['id'])->first();
      if (!$u)
         return response('', 404);

      return view('creneau', ['membres' => $membres, 'id_creneau' => $id, 'user' => $u]);
   }
}