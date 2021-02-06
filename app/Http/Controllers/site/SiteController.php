<?php

namespace App\Http\Controllers\site;

use App\Models\TipoObjecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Municipio;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function form_objecto()
    {
        $tipos_objectos = TipoObjecto::all();
        $municipios = Municipio::all();
        return view('site.objecto.registo', compact('tipos_objectos', 'municipios'));
    }

    
    public function listas_objectos()
    {
        return view('site.objecto.lista');
    }


}
