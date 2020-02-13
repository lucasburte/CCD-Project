<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class UserLoginController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $request = request();
        $route = $request->query('redirect');

        $users = User::get()->all();

        return view('connection', ['users' => $users, 'route' => $route]);
    }
}