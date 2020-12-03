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

Route::get('/imoveis', 'PropertyController@index');

Route::get('/imoveis/novo', 'PropertyController@create');//renderiza o form cadastro
Route::post('/imoveis/store', 'PropertyController@store');//Insert na bd

Route::get('/imoveis/{name}', 'PropertyController@show');

Route::get('/imoveis/editar/{name}', 'PropertyController@edit');//renderiza o form com name
Route::put('/imoveis/update/{name}', 'PropertyController@update');//atualiza bd
