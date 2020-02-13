<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Foreach_;

class CreneauController extends Controller {

   public function __construct(){}

   //permet à la classe de trouver un créneau dans la base
   public function trouverCreneau($jour,$semaine,$deb,$fin){
       $creneau = Creneau::where('jour','=',$jour,'and','semaine','=',$semaine,'and','debut','=',$deb,'and','fin','=',$fin)->first();
        return $creneau ;
   }
}