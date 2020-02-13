<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserListController;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

Route::get('/', function (Request $req) {
    return (new HomeController())->handle($req);
})->name('home');

Route::get('/users', function (Request $req) {
    return (new UserListController())->handle($req);
})->name('login');

///////////////////////////////////////////////

Route::post('/auth', 'Auth\LoginController@handle');