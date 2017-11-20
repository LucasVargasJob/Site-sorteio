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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios', 'UsuarioController@index');

//Route::get('/interesses', 'ProdutoController@interesses');

Route::get('/sorteios/{cliente}', 'SorteioController@index');

Route::get('/sorteios', 'SorteioController@index');

Route::get('/sorteio/novo', 'SorteioController@novo');

Route::get('/sorteios/{cliente}/editar', 'SorteioController@editar');

Route::post('/sorteios/salvar', 'SorteioController@salvar');

Route::patch('/sorteios/{sorteio}', 'SorteioController@atualizar');

Route::delete('/sorteios/{sorteio}', 'SorteioController@deletar');

Route::get('/interesses/{cliente}', 'SorteioController@manyToMany');

Route::get('/interesses/{cliente}/{sorteio}', 'SorteioController@manyToManyInsert');

Route::get('/pontos', 'SorteioController@pontos');


