<?php



Route::get('/usuarios', 'usuariosController@index');

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/novo', 'ClientesController@novo');
Route::post('/clientes/salvar', 'ClientesController@salvar');

