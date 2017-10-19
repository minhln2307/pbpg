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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/recruitment', function () {
    return view('recruitment');
})->name('recruitment');

Route::get('/pb', function () {
    return view('pb');
})->name('pb');

Route::get('/pg', function () {
    return view('pg');
})->name('pg');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('user', 'UserController@index');


Route::group(['prefix' => 'admin'], function(){

	/* route login admin*/
	Route::get('/', 'LoginController@getLogin')->name('login.admin');

	/* route login admin*/
	Route::post('/','LoginController@postLogin')->name('admin.login');


	/* route index admin*/
	Route::get('pbpg-admin', function(){
		return view('admin.dashboard');
	});

	Route::get('quan-ly-nguoi-dung',function(){
		return view('admin.userAdmin');
	})->name('admin.user');
	Route::get('user', 'UserController@index');

	Route::get('logout','LoginController@getlogout')->name('admin.logout');
});

/* route login*/

Route::get('/login','client\LoginController@getlogin')->name('login');

Route::post('/login', 'client\LoginController@postlogin' )->name('postlogin');

/*end route login*/

/*route register*/
Route::get('register', 'client\RegisterClientController@getregister')->name('register.get');

Route::post('register', 'client\RegisterClientController@store')->name('register.store');

/*end route register*/

/*route logout*/

Route::get('logout','client\LoginController@getlogout')->name('logout');

/*end route logout*/


