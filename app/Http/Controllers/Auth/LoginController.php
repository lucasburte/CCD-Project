<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct() {

    }

    public function login($request) {
        $name = $request->input('name');

        return response("{'name':'$name'}", 200)->header('Content-Type', 'application/json');
    }
}
