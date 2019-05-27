<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste', function() {
    return view('teste');
});

Route::get('testeController', 'testeController@index');
Route::get('testeController/segundaView', 'testeController@segundaView');
Route::get('testeController/segundaView/{nome}', 'testeController@show');
Route::get('testeController/terceiraView', 'testeController@terceiraView');

// Crud de produto
Route::get('/teste', 'testeController@index');
Route::get('/teste/create', 'testeController@create');
Route::post('/teste', 'testeController@store');
Route::get('/teste/{id}', 'testeController@show');
Route::get('/teste/{id}/edit', 'testeController@edit');
Route::put('/teste/{id}', 'testeController@update');
Route::delete('/teste/{id}', 'testeController@destroy');
Route::get('/teste/remove/{id}', 'testeController@remove');

// 