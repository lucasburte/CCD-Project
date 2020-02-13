<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Database\Models\User;

class UserListController extends Controller {
    public function __construct() {

    }

    public function getAll() {
        $users = User::get()->all();

        $json = '[';
        foreach ($users as $user) {
            $name = $user['name'];
            $id = $user['id'];

            $json .= "{'name':'$name','id':'$id'},";
        }
        $json .= ']';

        return response($json, 200)->header('Content-Type', 'application/json');
    }
}