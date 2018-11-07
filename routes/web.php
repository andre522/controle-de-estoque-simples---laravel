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

Route::group(['prefix' => 'produto'], function () {
    Route::get('/create', 'ProdutoController@create');
    Route::post('/create', 'ProdutoController@store');
    Route::get('{id}/destroy', 'ProdutoController@destroy');
    Route::get('{id}/edit', 'ProdutoController@edit');
    Route::put('{id}/update', 'ProdutoController@update');
});

Route::get('/', 'ProdutoController@index');
