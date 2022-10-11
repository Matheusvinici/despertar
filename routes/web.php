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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/gestao', 'HomeController@gestao')->name('gestao');
Route::get('/curriculo', 'HomeController@curriculo')->name('curriculo');
Route::get('/producao', 'HomeController@producao')->name('producao');
Route::get('/protagonismo', 'HomeController@protagonismo')->name('protagonismo');

Route::get('/comunitaria', 'HomeController@comunitaria')->name('comunitaria');
Route::get('/colaborativa', 'HomeController@colaborativa')->name('colaborativa');


