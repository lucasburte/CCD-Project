<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Inscrit extends Model {
    protected $database  = 'inscrit';
    protected $idInscrit = 'idinscrit';
    protected $idRole    = 'idrole';
    protected $idCreneau = 'idcreneau';
    protected $idUser    = 'iduser';
    public $timestamps   = false;
}