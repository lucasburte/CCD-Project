<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

use Illuminate\Http\Request;

class UserProfileController extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function handle($id) {
        $request = request();
        $resp = parent::redirectIfNeeded($request);
        if ($resp)
            return $resp;

        $user = User::where('id', '=', $id)->first();
        if (!$user)
            return response('User not found', 404);

        return view('user', ['user' => $user]);
    }
}