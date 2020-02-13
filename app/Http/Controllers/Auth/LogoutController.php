<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();
        $resp = parent::redirectIfNeeded($request);
        if ($resp)
            return $resp;

        if (!array_key_exists('login', $_SESSION)) {
            return response('User is not logged in...', 400);
        } else {
            unset($_SESSION['login']);
            unset($_SESSION['id']);
            return redirect($request->query('redirect'));
        }
    }
}