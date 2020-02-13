<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();

        $id = $request->query('user');
        $u = User::where('iduser', '=', $id)->first();

        if ($u) {
            $_SESSION['login'] = $u['nom'];
            $_SESSION['id'] = $id;
            return redirect($request->query('redirect'));
        } else
            return response('User not authenticated', 403);
    }
}
