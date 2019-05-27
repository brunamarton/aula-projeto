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
Route::get('/testeController/', 'testeController@index');
Route::get('/testeController/create', 'testeController@create');
Route::post('/testeController/', 'testeController@store');
Route::get('/testeController/{id}', 'testeController@show');
Route::get('testeController/{id}/edit','testeController@edit');
Route::put('testeController/{id}','testeController@update');
Route::delete('testeController/{id}','testeController@update');
Route::get('testeController/remove/{id}','testeController@remove');