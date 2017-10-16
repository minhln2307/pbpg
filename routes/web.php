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

<<<<<<< HEAD

Route::group(['' => 'admin'], function(){
	Route::get('admin', 'LoginController@getLogin');
	Route::post('admin','LoginController@postLogin')->name('admin.login');
	Route::get('accept', 'HomeController@getIndex')->name('admin.accept');
});
=======
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

>>>>>>> 0302aa451506cbd938fbfbc1f0f38fb9f583f2b9
