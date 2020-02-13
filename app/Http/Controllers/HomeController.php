<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle(Request $req) {
        $resp = parent::handle($req);
        if ($resp)
            return $resp;

        return view('connection', ['users' => $users]);
    }
}