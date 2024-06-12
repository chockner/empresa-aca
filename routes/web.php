<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'inicio')->name('inicio');
//Route::view('personas', 'personas')->name('personas');

route::get('personas', 'App\Http\Controllers\PersonasController@index')->name('personas.index');
route::get('personas/{id}', 'App\Http\Controllers\PersonasController@show')->name('personas.show');

Route::view('contacto', 'contacto')->name('contacto');