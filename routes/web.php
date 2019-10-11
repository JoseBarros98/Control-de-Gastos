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
    return view('home');
});
Route::resource('/contacto','ContactoController');
Route::resource('/gasto','GastoController');
Route::resource('/ingreso','IngresoController');

Route::view('/contacto', 'contacto')->name('contacto');
Route::post('contacto', 'ContactoController@store')->name('contacto.store');