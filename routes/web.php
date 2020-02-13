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

Route::get('/', 'HomeController@handle')->name('home');

Route::get('/users', 'Auth\UserListController@handle')->name('login');

Route::get('/auth', 'Auth\LoginController@handle')->name('auth');

Route::get('/logout', 'Auth\LogoutController@handle')->name('logout');

Route::get('/besoin','BesoinController@handle')->name('besoin');


///////////////////////////////////////////////