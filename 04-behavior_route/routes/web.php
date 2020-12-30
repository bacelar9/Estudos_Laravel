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

//Route::view('/form', 'form');
/**
 * Estrura básica de uma rota no Laravel
 * Route::verbo_http('URI', 'Controller@método');
 *
 * verbos http = [GET, POST, PUT, PATCH, OPTIONS];
 *
 * GET: Utilizado para obter dados do servidor e não altera o estado do recurso.
 *      Quando um formulário GET é disparado, os dados ficam presentes na URL.
 *
 *      Route::get('uri', 'callback');
 *
 * POST: utilizado para crição de recursos ou envio de dados ao servidor para validação.
 *       Os dados ficam no corpo da requisição e não da URL.
 *
 *       Route::post('uri','callback');
 *
 *  * passo a passo: Definir rota -> Criar controlador -> Criação de método -> Camada View
 */

 /**
  * GET
  */
//Route::get('/users/1', 'UserController@index');
//Route::get('/getData', 'UserController@getData');

/**
 * POST
 */
//Route::post('/postData', 'UserController@postData');

/**
 * PUT
 */
//Route::put('/users/1', 'UserController@testPut');

/**
 * PATCH
 */
//Route::patch('/users/1',  'UserController@testPatch');

/**
 * MATCH PUT/PATCH
 */
//Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');

/**
 * DELETE
 */
//Route::delete('users/1', 'UserController@destroy');

/**
 * ANY
 */
//Route::any('/users' , 'UserController@any');

//Route::resource('posts', 'PostController');

Route::get('/users/1', 'UserController@inspect')->name('inspect');
