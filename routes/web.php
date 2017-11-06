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

Route::get('/', 'RegistrationController@list');
Route::get('/list', 'RegistrationController@list');
Route::get('/register', 'RegistrationController@register');
Route::post('/register', 'RegistrationController@saveRegister');
Route::get('/thisroute', 'RegistrationController@thisRoute');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
