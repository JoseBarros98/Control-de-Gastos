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
    return view('auth');
});


Route::get('/index', function () {
    return view('index');
});
Route::resource('/contacto','ContactoController');
Route::resource('/gasto','GastoController');
Route::resource('/ingreso','IngresoController');

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto', 'ContactoController@store')->name('contacto.store');

Route::get ('/redirect','SocialController@redirect');
Route::get ('/callback','SocialController@callback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
