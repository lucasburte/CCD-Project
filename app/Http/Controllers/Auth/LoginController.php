<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct() {

    }

    public function login($request) {
        $name = $request->input('name');

        // TODO: handle connection
    }
}
