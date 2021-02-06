<?php

namespace App\Http\Controllers\painel;

use App\User;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class RelatorioController extends Controller
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
        //
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

    public function relatorioEntregues(){
        $user = auth()->user();
        $user_name = Pessoa::where('id', $user->id)->first()->nome;
        return view("painel.relatorio.entregues",compact('user_name'));
    }


    public function relatorioAchados(){
        $user = auth()->user();
        $user_name = Pessoa::where('id', $user->id)->first()->nome;
        return view("painel.relatorio.achados", compact('user_name'));
    }

    public function relatorioRoubados(){
        $user = auth()->user();
        $user_name = Pessoa::where('id', $user->id)->first()->nome;
        return view("painel.relatorio.roubados", compact('user_name'));

    }

    public function relatorioPerdidos(){
        $user = auth()->user();
        $user_name = Pessoa::where('id', $user->id)->first()->nome;
        return view("painel.relatorio.perdidos", compact('user_name'));

    }
}
