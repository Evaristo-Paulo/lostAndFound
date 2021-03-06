<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objecto extends Model
{

    public function site_estatistica_referente_estado()
    {
        $dados = \DB::select('select obj.id, obj.estado from objectos obj');

        $achado = $entregue = $extraviado = 0;

        foreach ($dados as $dado) {
            if ( $dado->estado == 'achado'){
                $achado++;
            }else if ( $dado->estado == 'perdido' || $dado->estado == 'roubado'){
                $extraviado++;
            }else{
                $entregue++;
            }
        }

        $elem = [
            'achado' => $achado,
            'extraviado' => $extraviado,
            'entregue' => $entregue,
        ];

        return $elem;
    }

    public function visualizacao_objectos($id)
    {
        $dados = \DB::select('select obj.id as ID_objecto, tobj.nome as categoria, obj.num_documento as n_documento, obj.descricao as obj_descricao, obj.estado as condicao, img.imagem as fotografia, mun.nome as municipio, loc.bairro from localizacaos loc, municipios mun ,objectos obj, tipo_objectos tobj, imagems img where obj.tipo_objecto_id = tobj.id and img.objecto_id = obj.id and obj.id = ? and obj.localizacao_id = loc.id and mun.id = loc.municipio_id ORDER by img.id', [$id]);

        $array_principal = array();

        foreach ($dados as $dado) {
            $tipos = array();
            foreach ($dados as $copia) {
                if ($dado->ID_objecto == $copia->ID_objecto) {
                    if (!in_array($copia->fotografia, $tipos)) {
                        Array_push($tipos, $copia->fotografia);
                    }
                }
            }
            $elem = [
                'id' => $dado->ID_objecto,
                'categoria' => $dado->categoria,
                'n_documento' => $dado->n_documento,
                'municipio' => $dado->municipio,
                'bairro' => $dado->bairro,
                'obj_descricao' => $dado->obj_descricao,
                'condicao' => ucfirst($dado->condicao),
                'fotografia' => $tipos
            ];
            unset($tipos);
            Array_push($array_principal, $elem);
        }

        return $array_principal[0];
    }



    public function listagem_objectos()
    {
        $dados = \DB::select('select obj.id as ID_objecto, tobj.nome as categoria, obj.estado, obj.descricao, img.imagem as fotografia, mun.nome as municipio, pr.nome as provincia from objectos obj, tipo_objectos tobj, imagems img, localizacaos lc, municipios mun, provincias pr where obj.tipo_objecto_id = tobj.id and img.objecto_id = obj.id and lc.id = obj.localizacao_id and mun.id = lc.municipio_id and pr.id = mun.provincia_id ORDER by img.id');

        $array_principal = array();

        foreach ($dados as $dado) {
            if ( $dado->estado != 'fechado'){
                $elem = [
                    'id' => $dado->ID_objecto,
                    'categoria' => strtolower($dado->categoria),
                    'descricao' => strtolower($dado->descricao),
                    'estado' => $dado->estado,
                    'municipio' => $dado->municipio,
                    'provincia' => $dado->provincia,
                    'fotografia' => $dado->fotografia
                ];
                Array_push($array_principal, $elem);
            }
        }

        $novo = array();
        $funcao_auxiliar = new Pessoa();

        if (count($array_principal) == 0) {
            return $novo;
        }

        do {
            $primeiroElemento = $array_principal[$funcao_auxiliar->array_key_primeira($array_principal)];

            foreach ($array_principal as $key => $dado) {
                if ($primeiroElemento != null) {
                    if ($primeiroElemento['id'] == $dado['id']) {
                        unset($array_principal[$key]);
                    }
                }
            }

            Array_push($novo, $primeiroElemento);
        } while (count($array_principal) > 0);

        return $novo;
    }

    public function destaque_objectos()
    {
        $dados = \DB::select('select obj.id as ID_objecto, tobj.nome as categoria, obj.estado, obj.descricao, img.imagem as fotografia, mun.nome as municipio, pr.nome as provincia from objectos obj, tipo_objectos tobj, imagems img, localizacaos lc, municipios mun, provincias pr where obj.tipo_objecto_id = tobj.id and img.objecto_id = obj.id and lc.id = obj.localizacao_id and mun.id = lc.municipio_id and pr.id = mun.provincia_id ORDER by img.id');

        $array_principal = array();

        foreach ($dados as $dado) {
            if ( $dado->estado != 'achado' && $dado->estado != 'fechado'){
                $elem = [
                    'id' => $dado->ID_objecto,
                    'categoria' => strtolower($dado->categoria),
                    'descricao' => strtolower($dado->descricao),
                    'estado' => $dado->estado,
                    'municipio' => $dado->municipio,
                    'provincia' => $dado->provincia,
                    'fotografia' => $dado->fotografia
                ];
                Array_push($array_principal, $elem);
            }
        }

        $novo = array();
        $funcao_auxiliar = new Pessoa();

        if (count($array_principal) == 0) {
            return $novo;
        }

        do {
            $primeiroElemento = $array_principal[$funcao_auxiliar->array_key_primeira($array_principal)];

            foreach ($array_principal as $key => $dado) {
                if ($primeiroElemento != null) {
                    if ($primeiroElemento['id'] == $dado['id']) {
                        unset($array_principal[$key]);
                    }
                }
            }

            Array_push($novo, $primeiroElemento);
        } while (count($array_principal) > 0);

        return $novo;
    }

    public function pegar_categoria_listagem_objectos()
    {
        $dados = \DB::select('select obj.id as ID_objecto, tobj.nome as categoria, img.imagem as fotografia from objectos obj, tipo_objectos tobj, imagems img where obj.tipo_objecto_id = tobj.id and img.objecto_id = obj.id  ORDER by img.id');

        $array_principal = array();

        foreach ($dados as $dado) {
            $elem = [
                'id' => $dado->ID_objecto,
                'categoria' => strtolower($dado->categoria),
                'fotografia' => $dado->fotografia
            ];
            unset($tipos);
            Array_push($array_principal, $elem);
        }

        $novo = array();
        $funcao_auxiliar = new Pessoa();

        if (count($array_principal) == 0) {
            return $novo;
        }

        do {
            $primeiroElemento = $array_principal[$funcao_auxiliar->array_key_primeira($array_principal)];

            foreach ($array_principal as $key => $dado) {
                if ($primeiroElemento != null) {
                    if ($primeiroElemento['categoria'] == $dado['categoria']) {
                        unset($array_principal[$key]);
                    }
                }
            }

            Array_push($novo, $primeiroElemento);
        } while (count($array_principal) > 0);

        return $novo;
    }
}
