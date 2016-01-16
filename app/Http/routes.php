<?php



Route::get('/', 'laraController@articles');
Route::get('articles', 'laraController@articles');
Route::get('articles/new', 'laraController@create');
Route::get('articles/{id}', 'laraController@show');



