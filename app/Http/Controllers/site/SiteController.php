<?php

namespace App\Http\Controllers\site;

use App\Models\Imagem;
use App\Models\Pessoa;
use App\Models\Objecto;
use App\Models\Provincia;
use App\Models\Localizacao;
use App\Models\TipoObjecto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function form_objecto()
    {
        $tipos_objectos = TipoObjecto::all();
        $provincias = Provincia::all();
        return view('site.objecto.registo', compact('tipos_objectos', 'provincias'));
    }
    public function store(Request $request)
    {

        if ($request->documento != null) {
            $hasObjecto = Objecto::where('num_documento', $request->documento)->first();
            if ($hasObjecto) {
                $request->session()->flash('warning', 'Foi encontrada uma correspondência deste objecto!');
                return redirect()->route('site.objecto.form');
            }
        }

        //dd($request->all());
        if ($request->hasFile('foto')) {
            $pessoa = new Pessoa();
            $pessoa->nome = $request->nome;
            $pessoa->telefone = $request->telefone;
            $pessoa->save();

            $localizacao = new Localizacao();
            $localizacao->bairro = $request->bairro;
            $localizacao->descricao = $request->localDescricao;
            $localizacao->municipio_id = $request->municipio;
            $localizacao->save();

            $objecto = new Objecto();
            $objecto->num_documento = $request->documento;
            $objecto->descricao = $request->objDescricao;
            $objecto->estado = $request->estado;
            $objecto->tipo_objecto_id = $request->tipo;
            $objecto->pessoa_id = $pessoa->id;
            $objecto->localizacao_id = $localizacao->id;
            $objecto->save();

            foreach ($request->file('foto') as $index => $file) {
                if ($file->isValid()) {
                    $nameFile = null;
                    $name = uniqid(date('HisYmd'));
                    $extension = $file->extension();
                    $nameFile = "{$name}.{$extension}";
                    $upload = $file->storeAs('objectos', $nameFile);
                    if (!$upload) {
                    }
                    $foto = new Imagem();
                    $foto->objecto_id = $objecto->id;
                    $foto->descricao = $request->objDescricao;
                    $foto->imagem = $nameFile;
                    $foto->save();
                }
            }

            $request->session()->flash('success', 'Registo efectuado com sucesso!');
            return redirect()->route('site.objecto.form');
        }

        $request->session()->flash('error', 'Registo não efectuado com sucesso!');
        return redirect()->route('site.objecto.form');
    }



    public function listas_objectos()
    {
        return view('site.objecto.lista');
    }

    public function visualiza_objectos()
    {
        return view('site.objecto.visualiza');
    }
}
