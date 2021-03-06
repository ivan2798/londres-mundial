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


Auth::routes();

Route::resource('/jugadores','JugadorController')->parameters(['jugadores' => 'jugadores']);

Route::resource('/lideres','LiderController')->parameters(['lideres' => 'lideres']); 
                           
Route::get('/jueces','JuezController@historia')->name('jueces');

Route::get('/home', 'HomeController@index')->name('home');
