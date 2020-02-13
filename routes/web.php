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

Route::get('/', function () {
    return view('welcome');
})->name('home');

///////////////////////////////////////////////

Route::post('/auth', function (Request $request) {
    return (new LoginController())->login($request);
});

Route::post('/users', function (Request $request) {
    return (new UserListController())->getAll($request);
});