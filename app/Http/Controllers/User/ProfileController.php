<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle($id) {
        $request = request();
        $resp = parent::redirectIfNeeded($request);
        if ($resp)
            return $resp;

        $user = User::where('iduser', '=', $id)->first();
        if (!$user)
            return response('User not found', 404);

        $role = User::where('idrole', '=', $user['idrole'])->first();
        if (!$role)
            return response('Role not found', 404);

        return view('user', ['user' => $user], 'role', ['role' => $role]);
    }
}