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
    return view('lhd');
});

//Auth::routes();

Route::get('/login','Auth\LoginController@showLoginForm')->name('login');

Route::post('/login','Auth\MyController@myLogin')->name('login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/validateFlag','HomeController@validateFlag')->name('validate')->middleware('auth');
