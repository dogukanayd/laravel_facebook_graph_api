<?php
/*
|--------------------------------------------------------------------------
| Test Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::post('api', 'TypeFormDataController@test');
Route::get('api', function()
{
    return view('api');
});

Route::get('result', function(){
    return view('result.marvel');
});

/*Route::get('test', function()
{
    return view('api');
});*/



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


Route::get('/', function () {
    return view('tests/home');
});




//Route::post('login', 'FacebookUser@store');
Route::get('/login', function () {
    return view('auth/login');
});


Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });
});

Auth::routes();



/*
|--------------------------------------------------------------------------
| 4 farklı ana test için
|--------------------------------------------------------------------------
|
*/
//return view::make olacaktı silindi
Route::post('/neuroticism', 'FacebookUser@neuroticism');
Route::get('/neuroticism', function () {
    return view('tests/test/neuroticism');
});



Route::post('/agreeableness', 'FacebookUser@agreeableness');
Route::get('/agreeableness', function () {
    return view('tests/test/agreeableness');
});

Route::post('/conscientiousness', 'FacebookUser@conscientiousness');
Route::get('/conscientiousness', function () {
    return view('tests/test/conscientiousness');
});

Route::post('/extraversion', 'FacebookUser@extraversion');
Route::get('/extraversion', function () {
    return view('tests/test/extraversion');
});

/*
|--------------------------------------------------------------------------
| creatif olarak gelen farklı testler için
|--------------------------------------------------------------------------
|
*/
Route::post('/marvel', 'FacebookUser@agreeableness'); //hangi marvel karakterisin single test karşılama sayfası
Route::get('/marvel', function(){
    return view('tests/singleTest/marvel');
});


Route::post('/dc', 'FacebookUser@neuroticism');
Route::get('/dc', function(){
    return view('tests/singleTest/dc');
});

Route::post('/friends', 'FacebookUser@conscientiousness');
Route::get('/friends', function(){
    return view('tests/singleTest/friends');
});

Route::post('/himym', 'FacebookUser@extraversion');
Route::get('/himym', function(){
    return view('tests/singleTest/himym');
});









