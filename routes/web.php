<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ZoneController@inicio')->name('inicio');

Route::get('/zona1', 'App\Http\Controllers\ZoneController@zona1')->name('zona1');
Route::get('/zona2', 'App\Http\Controllers\ZoneController@zona2')->name('zona2');
Route::get('/zona3', 'App\Http\Controllers\ZoneController@zona3')->name('zona3');
Route::get('/zona4', 'App\Http\Controllers\ZoneController@zona4')->name('zona4');
Route::get('/zona5', 'App\Http\Controllers\ZoneController@zona5')->name('zona5');
Route::get('/zona6', 'App\Http\Controllers\ZoneController@zona6')->name('zona6');

Route::get('/crearOferente', 'App\Http\Controllers\OferenteController@crear')->name('crear');
Route::get('/buscarOferente', 'App\Http\Controllers\OferenteController@buscar')->name('buscar');
Route::post('/guardarOferente', 'App\Http\Controllers\OferenteController@guardar')->name('guardar');