<?php

namespace App\Http\Controllers\site;

use App\Models\Imagem;
use App\Models\Pessoa;
use App\Models\Objecto;
use App\Models\Localizacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObjectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $nameFile = null;
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->foto->extension();
            $nameFile = "{$name}.{$extension}";
            $upload = $request->foto->storeAs('objectos', $nameFile);

            if (!$upload) {
            }

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

            $foto = new Imagem();
            $foto->objecto_id = $objecto->id;
            $foto->descricao = $request->objDescricao;
            $foto->imagem = $nameFile;
            $foto->save();
            
            $request->session()->flash('success', 'Registado com sucesso!');

            dd( $objecto );

            return redirect()->route('painel.categorias.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
