<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use App\Database\Models\Creneau;

use Illuminate\Http\Request;

class ChangeCreneauController extends CreneauController {
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();
        $resp = parent::handle($request);
        if ($resp)
            return $resp;

        //permet à l'utilisateur de supprimer le creneau

        if($request->creneau->jour != $request->jour){
            $request->creneau->jour = $request->jour ;
        }
 
        if($request->creneau->semaine != $request->semaine){
            $request->creneau->semaine = $request->semaine ;
        }
 
        if($request->creneau->dateDebut != $request->deb){
            $request->creneau->dateDebut = $request->deb ;
        }
 
         if($request->creneau->dateFin != $request->fin){
             $request->creneau->dateFin = $request->fin ;
         }
    }
}
