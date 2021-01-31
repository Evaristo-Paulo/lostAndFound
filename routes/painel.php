<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Painel Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/dashboard','painel\LoginController@painel')->name('painel');

Route::get('/painel/login', 'painel\LoginController@login_form')->name('painel.login');
Route::post('/postLogin','painel\LoginController@postLogin')->name('postLogin');
Route::get('/painel/redifinicao-de-senha', 'painel\LoginController@redidfinirSenha')->name('redifinir.senha');
Route::post('/painel/redifinicao-de-senha', 'painel\LoginController@updateNovasenha')->name('updateNovasenha');

Route::get('/painel/logout', 'painel\LoginController@logout')->name('logout');


/*====================== ROLES ================*/
Route::get('/painel/roles/registo','painel\RoleController@create')->name('role.create');
Route::post('/painel/roles/registo','painel\RoleController@store')->name('role.store');
Route::get('/painel/roles','painel\RoleController@index')->name('role.index');
Route::get('/painel/roles/{id}/actualizacao','painel\RoleController@edit')->name('role.edit');
Route::post('/painel/role/{id}/actualizacao','painel\RoleController@update')->name('role.update');
Route::get('/painel/roles/{id}/visualizacao','painel\RoleController@show')->name('role.show');

/*====================== UTILIZADORES ================*/
Route::get('/painel/usuarios/registo','painel\UserController@create')->name('user.create');
Route::post('/painel/usuarios/registo','painel\UserController@store')->name('user.store');
Route::get('/painel/usuarios','painel\UserController@index')->name('user.index');
Route::get('/painel/usuarios/{id}/actualizacao','painel\UserController@edit')->name('user.edit');
Route::post('/painel/usuarios/{id}/actualizacao','painel\UserController@update')->name('user.update');
Route::get('/painel/usuarios/{id}/activacao','painel\UserController@activar')->name('user.acivar');
Route::get('/painel/usuarios/{id}/reset','painel\UserController@reset')->name('user.reset');

