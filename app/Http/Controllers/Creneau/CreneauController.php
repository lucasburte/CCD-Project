<?php


namespace App\Http\Controllers\Creneau;



use App\Database\Models\Creneau;
use PhpParser\Node\Stmt\Foreach_;

class CreneauController
{


   public function __construct(){}


   //permet à la classe de trouver un créneau dans la base
   public function trouverCreneau($jour,$semaine,$deb,$fin){
       $creneau = Creneau::where('jour','=',$jour,'and','semaine','=',$semaine,'and','debut','=',$deb,'and','fin','=',$fin)->first();
        return $creneau ;
   }

    public function nouveauCreneau($jour,$semaine,$deb,$fin){
        $creneau = new Creneau() ;
        //verifier si le creneau n'est pas déjà utilisé ou contenu dans un autre créneau
        $crenSemaine = Creneau::where('semaine','=',$semaine)->get();
        if($crenSemaine != null){
            foreach($crenSemaine as $cren){
                if($cren->jour != $jour){
                    //retirer le creneau
                    unset($cren);
                }
            }
            foreach($crenSemaine as $cren1){
                if($cren->dateDebut > $deb && $cren->dateDebut > $fin){
                    unset($cren) ;
                }
            }
            foreach($crenSemaine as $cren1){
                if($cren->dateFin > $deb && $cren->dateFin > $fin){
                    unset($cren) ;
                }
            }
        }
            $creneau->jour = $jour ;
            $creneau->semaine = $semaine ;
            $creneau->heureDebut = $deb ;
            $creneau->heureFin = $fin ;

        $creneau->save();
    }
//permet à l'utilisateur de supprimer un creneau
    public function supprimerCreneau($jour,$semaine,$deb,$fin){
       //trouver le  creneau concerné
        $creneau =  $this->trouverCreneau($jour,$semaine,$deb,$fin);
       //supprimer le creneau
        $creneau->delete();
    }


    //permet à l'utilisateur de supprimer le creneau
    public function modifierCreneau($creneau,$jour,$semaine,$deb,$fin){

       if($creneau->jour != $jour){
           $creneau->jour = $jour ;
       }

       if($creneau->semaine != $semaine){
           $creneau->semaine = $semaine ;
       }

       if($creneau->dateDebut != $deb){
           $creneau->dateDebut = $deb ;
       }

        if($creneau->dateFin != $fin){
            $creneau->dateFin = $fin ;
        }
    }

}