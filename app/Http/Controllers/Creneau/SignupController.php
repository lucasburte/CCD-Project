<?php

namespace App\Http\Controllers\Creneau;

use App\Http\Controllers\Controller;
use App\Database\Models\Inscrit;
use App\Database\Models\Role;
use App\Database\Models\User;

class SignupController extends CreneauController {

    public function __construct(){}

    public function handle($id_creneau, $idrole, $id) {
        $req = request();
        $resp = parent::redirectIfNeeded($req);
        if ($resp)
            return $resp;

        Inscrit::where('idcreneau', '=', $id_creneau)->where('idrole', '=', $idrole)->update(['iduser' => $id]);

        return redirect(request()->query('redirect'));
    }
}