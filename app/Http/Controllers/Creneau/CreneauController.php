<?php


namespace App\Http\Controllers\Creneau;



use App\Database\Models\Creneau;

class CreneauController
{


   public function __construct(){}

    public function nouveauCreneau($jour,$semaine,$deb,$fin){
        $creneau = new Creneau() ;

        //verifier si le creneau n'est pas déjà utilisé ou contenu dans un autre créneau

        if(Creneau::where('jour','=', $jour)->first() && Creneau::where('semaine','=',$semaine)){
            //verifier que l'heure n'est pas contenue dans un autre horaire
            echo "erreur, un creneau existe deja pour ce jour !" ;
        }else{
            $creneau->jour = $jour ;
            $creneau->semaine = $semaine ;
            $creneau->heureDebut = $deb ;
            $creneau->heureFin = $fin ;
        }

        $creneau->save();
    }

}