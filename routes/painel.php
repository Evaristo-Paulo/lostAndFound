<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Painel Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/painel', function () {
    return view('welcome');
});
