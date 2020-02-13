<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use App\Database\Models\Creneau;

use Illuminate\Http\Request;

class NewCreneauController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();
        $resp = parent::handle($request);
        if ($resp)
            return $resp;

        $creneau = new Creneau() ;
        //verifier si le creneau n'est pas déjà utilisé ou contenu dans un autre créneau
        $crenSemaine = Creneau::where('semaine','=',$request->semaine)->get();
        if($crenSemaine != null){
            foreach($crenSemaine as $cren){
                if($cren->jour != $request->jour){
                    //retirer le creneau
                    unset($cren);
                }
            }
            foreach($crenSemaine as $cren1){
                if($cren->dateDebut > $request->deb && $cren->dateDebut > $request->fin){
                    unset($cren) ;
                }
            }
            foreach($crenSemaine as $cren1){
                if($cren->dateFin > $request->deb && $cren->dateFin > $request->fin){
                    unset($cren) ;
                }
            }
        }
            $creneau->jour = $request->jour ;
            $creneau->semaine = $request->semaine ;
            $creneau->heureDebut = $request->deb ;
            $creneau->heureFin = $request->fin ;

        $creneau->save();
    }
}
