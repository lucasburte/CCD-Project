<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();

        $name = $request->query('user');

        if ($name) {
            $_SESSION['login'] = $name;
            return redirect($request->query('redirect'));
        } else
            return response('User not authenticated', 403);
    }
}
