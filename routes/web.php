<?php

use RealRashid\SweetAlert\Facades\Alert;
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
/*Route::get('/', function () {
    return view('auth');
});
*/

Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::resource('/contacto','ContactoController');
Route::resource('/gasto','GastoController');
Route::resource('/ingreso','IngresoController');

Route::view('/contacto', 'contacto')->name('contacto');
//Route::post('contacto', 'ContactoController@store')->name('contacto.store');

Route::get ('/redirect/{provider}','SocialController@redirect');
Route::get ('/callback/{provider}','SocialController@callback');



Route::get('/', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
