<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

class UserListController extends Controller {
    public function __construct() {

    }

    public function getAll() {
        $users = User::get()->all();

        return view('user', ['users' => $users]);
    }
}