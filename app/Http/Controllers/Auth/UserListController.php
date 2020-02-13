<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class UserListController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle(Request $req) {
        $users = User::get()->all();

        return view('connection', ['users' => $users]);
    }
}