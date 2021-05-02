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

Route::get('/', 'AutorController@lista');
Route::get('/autores', 'AutorController@lista');
Route::get('/autores/mostra/{id}', 'AutorController@mostra');
Route::get('/autores/novo', 'AutorController@novo');
Route::get('/autores/adiciona', 'AutorController@adiciona');
Route::get('/autores/edita/{id}', 'AutorController@edita');
Route::get('/autores/altera', 'AutorController@altera');
Route::get('/autores/exclui/{id}', 'AutorController@exclui');
Route::get('/autores/remove', 'AutorController@remove');