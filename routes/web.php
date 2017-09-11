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
Route::get('api', function () {
	return view('api');
});

Route::get('/', 'TestController@index');
Route::get('/test/{test}', 'TestController@show');

Route::get('result', function () {
	return view('result.marvel');
});

Route::get('privacypolicy', function () {
	return view('privacy');
});

/*Route::get('test', function()
{
return view('api');
});*/

/*
|--------------------------------------------------------------------------
| İlk 10 test
|--------------------------------------------------------------------------
 */

Route::get('/barneysheldon', function () {
	return view('result.opennes-conscientiousness');
});

Route::get('/boromirfaramir', function () {
	return view('result.opennes-extraversion');
});

Route::get('/rihannabeyonce', function () {
	return view('result.opennes-agreeableness');
});

Route::get('/jedisith', function () {
	return view('result.opennes-neuroticism');
});

Route::get('/canmanaydeniz', function () {
	return view('result.conscientiousness-extraversion');
});

Route::get('/messironaldo', function () {
	return view('result.conscientiousness-agreeableness');
});

Route::get('/hobbitcuce', function () {
	return view('result.conscientiousness-neuroticism');
});

Route::get('/yandexgoogle', function () {
	return view('result.extraversion-agreeableness');
});

Route::get('/harrydraco', function () {
	return view('result.extraversion-neuroticism');
});

Route::get('/ledzeppelinthedoors', function () {
	return view('result.agreeableness-neuroticism');
});

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

// Route::get('/', function () {
// 	return view('tests/home');
// });

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
| 10 farklı ana test için
|--------------------------------------------------------------------------
|
 */

//1 bitti
Route::post('/yimdi7', 'FacebookUser@opennesAndConscientiousness');
Route::get('/yimdi7', function () {
	return view('tests/test/opennesAndConscientiousness');
});

//2 bitti
Route::post('/hum5hr', 'FacebookUser@opennesAndExtraversion');
Route::get('/hum5hr', function () {
	return view('tests/test/opennesAndExtraversion');
});

//3 bitti
Route::post('/ycyvsi', 'FacebookUser@opennesAndAgreeableness');
Route::get('/ycyvsi', function () {
	return view('tests/test/opennesAndAgreeableness');
});

//4 bitti
Route::post('/owtbkc', 'FacebookUser@opennesAndNeuroticism');
Route::get('/owtbkc', function () {
	return view('tests/test/opennesAndNeuroticism');
});

//5 bitti
Route::post('/p6odqd', 'FacebookUser@conscientiousnessAndExtraversion');
Route::get('/p6odqd', function () {
	return view('tests/test/conscientiousnessAndExtraversion');
});

//6 bitti
Route::post('/ggw30v', 'FacebookUser@conscientiousnessAndAgreeableness');
Route::get('/ggw30v', function () {
	return view('tests/test/conscientiousnessAndAgreeableness');
});

//7 bitti
Route::post('/ey4gqn', 'FacebookUser@conscientiousnessAndNeuroticism');
Route::get('/ey4gqn', function () {
	return view('tests/test/conscientiousnessAndNeuroticism');
});

//8
Route::post('/n9e2hn', 'FacebookUser@extraversionAndAgreeableness');
Route::get('/n9e2hn', function () {
	return view('tests/test/extraversionAndAgreeableness');
});

//9
Route::post('/ib4zjh', 'FacebookUser@extraversionAndNeuroticism');
Route::get('/ib4zjh', function () {
	return view('tests/test/extraversionAndNeuroticism');
});

//10
Route::post('/maqaq3', 'FacebookUser@agreeablenessAndNeuroticism');
Route::get('/maqaq3', function () {
	return view('tests/test/agreeablenessAndNeuroticism');
});

/*
|--------------------------------------------------------------------------
| creatif olarak gelen farklı testler için
|--------------------------------------------------------------------------
|
 */
Route::post('/marvel', 'FacebookUser@agreeableness'); //hangi marvel karakterisin single test karşılama sayfası
Route::get('/marvel', function () {
	return view('tests/singleTest/marvel');
});

Route::post('/dc', 'FacebookUser@neuroticism');
Route::get('/dc', function () {
	return view('tests/singleTest/dc');
});

Route::post('/friends', 'FacebookUser@conscientiousness');
Route::get('/friends', function () {
	return view('tests/singleTest/friends');
});

Route::post('/himym', 'FacebookUser@extraversion');
Route::get('/himym', function () {
	return view('tests/singleTest/himym');
});

/*
|--------------------------------------------------------------------------
| açıklık ve sorumluluk = opennesAndConscientiousness
|--------------------------------------------------------------------------
|
 */

Route::post('/barneyOrSheldon', 'FacebookUser@opennesAndConscientiousness');
Route::get('/barneyOrSheldon', function () {
	return view('tests/aciklikSorumluluk/barneyOrSheldon');
});

/*
|--------------------------------------------------------------------------
| opennesAndExtraversion = açıklık ve dışadönüklük
|--------------------------------------------------------------------------
|
 */

Route::get('robinOrPenny', 'FacebookUser@opennesAndExtraversion');
Route::get('robinOrPenny', function () {
	return view('tests/aciklikDisadonukluk/robinOrPenny');
});
