<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste', function() {
    return view('teste');
});

Route::get('testeController', 'testeController@index');
Route::get('testeController/segundaView', 'testeController@segundaView');