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

Route::get('/', 'contasPagarController@listar');

Route::get('/incluir', function () {
    return view('incluirCP');
});

Route::get('/editar-conta/{id}', 'contasPagarController@editar');

Route::POST('/incluir','contasPagarController@incluir');
Route::POST('/alterar','contasPagarController@alterar');
Route::get('/deletar/{id}', 'contasPagarController@deletar');