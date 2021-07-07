<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'ClientesController@index')->name('home');

Route::get('/clientes', 'ClientesController@index')->middleware('auth');
Route::get('/clientes/novo', 'ClientesController@create')->middleware('auth');
Route::post('/clientes/add', 'ClientesController@store')->middleware('auth');
Route::get('/clientes/{id}/edit', 'ClientesController@edit')->middleware('auth');
Route::post('/clientes/update/{id}', 'ClientesController@update')->middleware('auth');
Route::delete('/clientes/delete/{id}', 'ClientesController@destroy')->middleware('auth');