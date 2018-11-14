<?php

Route::get('/','PostController@index');
Route::get('/post/create','PostController@create');
Route::get('/post/list/{post}','PostController@show');
Route::post('/post','PostController@store');
Route::get('/post/delete/{id}','PostController@destroy');
Route::get('/post/edit/{id}','PostController@edit');
Route::post('/post/update/{id}','PostController@update');