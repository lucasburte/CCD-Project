<?php

namespace App\Database\Models;

use \Illuminate\Database\Eloquent\Model as Model;

Class User extends Model {
    protected $table = 'user';
    protected $id    = 'id';
    protected $nom   = 'nom';
    public $timestamps = false;

    public function users() {
        return self::get();
    }
}   