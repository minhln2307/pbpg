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


Route::group(['' => 'admin'], function(){
	Route::get('admin', 'LoginController@getLogin');
	Route::post('admin','LoginController@postLogin')->name('admin.login');
	Route::get('accept', 'HomeController@getIndex')->name('admin.accept');
});
