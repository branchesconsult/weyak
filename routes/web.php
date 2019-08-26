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
    return view('welcome');
});

Auth::Routes();
Route::get('/register-clinic','Auth\RegisterController@showRegistrationForm');
Route::post('/register-clinic','Auth\RegisterController@registerClinic')->name('register-clinic');

Route::get('/home', 'HomeController@index')->name('home');
