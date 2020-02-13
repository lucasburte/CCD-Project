<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class ListController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();
        $resp = parent::redirectIfNeeded($request);
        if ($resp)
            return $resp;

        $users = User::get()->all();

        return view('users', ['users' => $users]);
    }
}