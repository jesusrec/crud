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

//Route::get('/usuario','UsuarioController@index');

//Route::get('/usuario/create', 'UsuarioController@create');

Route::resource('user', 'UsuarioController');





