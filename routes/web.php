<?php

Route::get('/nuevaCategoria', 'CategoriaController@create');
Route::post('/nuevaCategoria','CategoriaController@store');

Route::get('/{msg?}', 'HomeController@index')->name('home');