<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function handle(Request $request) {
        $resp = parent::handle($request);
        if ($resp)
            return $resp;

        $name = $request->input('name');

        // TODO: handle connection
    }
}
