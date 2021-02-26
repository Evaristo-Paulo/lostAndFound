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
Route::get('/objectos/registo', 'site\SiteController@form_objecto')->name('site.objecto.form');
Route::post('/objectos/registo', 'site\SiteController@store')->name('site.objecto.store');
Route::get('/objectos', 'site\SiteController@listas_objectos')->name('site.objecto.lista');
Route::get('/objectos/{id}/visualizacao', 'site\SiteController@visualiza_objectos')->name('site.objecto.visualiza');

Route::post('/objectos/achado-por-pessoa', 'site\SiteController@store_objecto_achado')->name('site.objecto.achado.store');

 /* POPULAR PROVÍNCIA/MUNICÍPIO */
 Route::get('/ajax-subcat', function ( Request $request ) {
    $provincia_id = $request->input('provincia_id');
    $subcategoria = Municipio::where('provincia_id', '=', $provincia_id)->get();
    return Response::json($subcategoria);
});
