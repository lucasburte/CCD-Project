<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Role extends Model {
    protected $table   = 'role';
    protected $id      = 'idrole';
    protected $label   = 'label';
    protected $desc    = 'description';
    public $timestamps = false;
}
