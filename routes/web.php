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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('tests/home');
});

Route::get('/test', function(){
	return view('tests/home');
});


//Route::post('login', 'FacebookUser@store');

Route::post('log', 'FacebookUser@store');

Route::get('log', function()
{
    return View::make('welcome');
});

Route::group(['middleware' => 'admin'], function(){
	Route::resource('admin/users', 'AdminUsersController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
