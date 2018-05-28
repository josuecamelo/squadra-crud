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

$router->group(['prefix' => 'usuarios', 'as' => 'usuarios.'], function () use ($router) {
    $router->get('/', ['as' => 'listar', 'uses' => 'UsuarioController@index']);
    $router->post('store', ['as' => 'gravar', 'uses' => 'UsuarioController@store']);
    $router->get('create', ['as' => 'criar', 'uses' => 'UsuarioController@create']);
    $router->get('{id}/destroy', ['as' => 'remover', 'uses' => 'UsuarioController@destroy']);
    $router->get('{id}/edit', ['as' => 'editar', 'uses' => 'UsuarioController@edit']);
    $router->post('{id}/update', ['as' => 'atualizar', 'uses' => 'UsuarioController@update']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
