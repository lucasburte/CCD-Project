<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Role extends Model {
    protected $table   = 'role';
    protected $id      = 'id';
    protected $label   = 'label';
    public $timestamps = false;
}