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

/*Route::get('/test', function(){
	return view('tests/home');
});*/

/*Route::get('/', function () {
    return view('layouts/testhome');
});

Route::get('/test', function(){
    return view('layouts/testhome');
});*/


//Route::post('login', 'FacebookUser@store');
Route::get('/login', function () {
    return view('auth/login');
});
Route::post('log', 'FacebookUser@store');

Route::get('log', function () {
    return view('log');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| 4 farklı test için
|--------------------------------------------------------------------------
|
*/
//return view::make olacaktı silindi
Route::post('/neuroticism', 'FacebookUser@store');
Route::get('/neuroticism', function () {
    return view('tests/test/neuroticism');
});

Route::post('/marvel', 'FacebookUser@store');
Route::get('/marvel', function(){
    return view('tests/singleTest/marvel');
});

Route::post('/agreeableness', 'FacebookUser@store');
Route::get('/agreeableness', function () {
    return view('tests/test/agreeableness');
});

Route::post('/conscientiousness', 'FacebookUser@store');
Route::get('/conscientiousness', function () {
    return view('tests/test/conscientiousness');
});

Route::post('/extraversion', 'FacebookUser@store');
Route::get('/extraversion', function () {
    return view('tests/test/extraversion');
});











