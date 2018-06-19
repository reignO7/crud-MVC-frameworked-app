<?php


Route::get('/', 'StudentController@index');

Route::get('/students/create', 'StudentController@create');

Route::post('/students', 'StudentController@store');

Route::get('/students/{student}', 'StudentController@show');