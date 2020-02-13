<?php


namespace App\Http\Controllers;


class BesoinController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $req = request();
        $resp = parent::redirectIfNeeded($req);
        if ($resp)
            return $resp;

        return view('besoin');
    }
}