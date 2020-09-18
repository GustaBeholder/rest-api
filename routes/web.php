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

Route::get('/cliente/{id}',['as'=>'clientes.index', 'uses'=>'ClienteController@index']);

Route::post('/adcionar', ['as'=>'clientes.adcionar', 'uses'=>'ClienteController@adcionar']);

Route::put('/atualizar/{id}', ['as'=>'clientes.atualizar', 'uses'=>'ClienteController@atualizar']);

Route::delete('/deletar/{id}', ['as'=>'clientes.deletar', 'uses'=>'ClienteController@deletar']);