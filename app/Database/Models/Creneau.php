<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Creneau extends Model {
    protected $database   = 'creneau';
    protected $idCreneau  = 'idcreneau';
    protected $semaine    = 'semaine';
    protected $jour       = 'jour';
    protected $heureDebut = 'debut';
    protected $heureFin   = 'fin';
    public $timestamps    = false;
}
