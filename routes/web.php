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

Route::get('/login', 'LoginController@showForm');
Route::post('/loginLogin', 'LoginController@verifyUser');
Route::post('/loginSignUp', 'LoginController@addNewUser');
Route::get('/logout', 'LoginController@doLogout');

Route::get('/index', 'HomeController@showIndex');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/test', function(){
	return DB::table('members')->get();
});

