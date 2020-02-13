<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model { 
    protected $table   = 'user';
    protected $id      = 'iduser';
    protected $nom     = 'nom';
    protected $idRole  = 'idrole';
    public $timestamps = false;

    public function users() {
        return self::get();
    }
}   