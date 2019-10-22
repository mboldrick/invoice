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

Route::get('/home', 'HomeController@index')->name('home');

// Clients
// Route::resource('clients', 'ClientController');
Route::get('/clients', 'ClientController@index')->name('clients.index');
Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::get('/clients/{client}', 'ClientController@show')->name('clients.show');
Route::get('/clients/{client}/edit', 'ClientController@edit')->name('clients.edit');
Route::patch('/clients/{client}', 'ClientController@update')->name('clients.update');
Route::delete('/clients/{client}', 'ClientController@destroy')->name('clients.destroy');
