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

use Illuminate\Http\Request;

Route::get('/', 'HomeController@handle')->name('home');

Route::get('/login', 'Auth\UserLoginController@handle')->name('login');

Route::get('/auth', 'Auth\LoginController@handle')->name('auth');

Route::get('/logout', 'Auth\LogoutController@handle')->name('logout');

Route::get('creneau/{id}','Creneau\CreneauController@handle')->name('creneau');

Route::get('/users', 'User\ListController@handle')->name('users');

Route::get('/user/{id}', 'User\ProfileController@handle')->name('profile');

///////////////////////////////////////////////

Route::get('css/{file}', 'Res\CSSController@handle')->name('css');
Route::get('js/{file}', 'Res\JSController@handle')->name('js');
Route::get('vendor/{file}', 'Res\VendorController@handle')->name('vendor');
Route::get('img/{file}', 'Res\ImgController@handle')->name('img');