<?php


Route::get('/','TestController@welcome');

Route:: get('/prueba',function () {return  'hola prro'; }) ;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
