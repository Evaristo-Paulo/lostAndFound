<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'site\SiteController@index')->name('site.index');
Route::get('/registo-de-objecto', 'site\SiteController@form_objecto')->name('site.objecto.form');
Route::post('/registo-de-objecto', 'site\ObjectoController@store')->name('site.objecto.store');
Route::get('/lista-de-objecto', 'site\SiteController@listas_objectos')->name('site.objecto.lista');
