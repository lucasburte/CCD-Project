<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Inscrit extends Model {
    protected $table     = 'inscrit';
    protected $idInscrit = 'idinscrit';
    protected $idRole    = 'idrole';
    protected $idCreneau = 'idcreneau';
    protected $idUser    = 'iduser';
    public $timestamps   = false;

    public function role() {
        return Role::where('idrole', '=', $this->idrole)->first();
    }

    public function user() {
        return User::where('iduser', '=', $this->iduser)->first();
    }
}