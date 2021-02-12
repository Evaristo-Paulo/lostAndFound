<?php

use App\Models\Municipio;
use Illuminate\Http\Request;
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
Route::post('/registo-de-objecto', 'site\SiteController@store')->name('site.objecto.store');
Route::get('/todos-objectos', 'site\SiteController@listas_objectos')->name('site.objecto.lista');
Route::get('/objectos/{id}/visualizacao', 'site\SiteController@visualiza_objectos')->name('site.objecto.visualiza');

 /* POPULAR PROVÍNCIA/MUNICÍPIO */
 Route::get('/ajax-subcat', function ( Request $request ) {
    $provincia_id = $request->input('provincia_id');
    $subcategoria = Municipio::where('provincia_id', '=', $provincia_id)->get();
    return Response::json($subcategoria);
});
