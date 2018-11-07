<?php


Route::group(['prefix' => 'produto'], function () {
    Route::get('/create', 'ProdutoController@create');
    Route::post('/create', 'ProdutoController@store');
    Route::get('{id}/destroy', 'ProdutoController@destroy');
    Route::get('{id}/edit', 'ProdutoController@edit');
    Route::put('{id}/update', 'ProdutoController@update');
});

Route::get('/', [
    'uses' => 'ProdutoController@index',
    'as' => 'produto'
]);
