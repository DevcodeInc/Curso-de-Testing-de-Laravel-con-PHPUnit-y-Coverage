<?php

Route::get('/nuevaCategoria', 'CategoriaController@create');
Route::post('/nuevaCategoria','CategoriaController@store');

Route::get('/{msg?}', 'HomeController@index')->name('home');


Route::get('/login/social/{social}', 'LoginController@redirectToSocial');
Route::get('/login/{social}/callback/', 'LoginController@handleSocialCallback');
Route::get('/login/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::get('/slack', 'SendSlack@send')->name('slack');