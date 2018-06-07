<?php

namespace App\Http\Controllers\Admin;

use App\Models\Plano;
use App\Models\Modalidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanoController extends Controller
{
    private $pages = 5;
    public function index()
    {
        $planos = Plano::all();
        $planos = Plano::paginate($this->pages);
        return view('admin.plano.index', compact('planos'));
    }

    public function editar($id = null)
    {
        $modalidades = Modalidade::all();
        if (is_null($id)) {
            $action = '/admin/plano/inserir';
            $tipo = null;
            $forma_pgto = null;
            $modalidade = null;
           
        } else {
            $action = '/admin/plano/alterar/' . $id;
            $planos        = Plano::find($id);
            $tipo          = $planos->tipo;
            $forma_pgto    = $planos->forma_pagamento;
            $modalidade    = $planos->modalidade_id;
        }

        return view('admin.plano.editar', compact(
                                                'id',
                                                'action',
                                                'tipo',
                                                'forma_pgto',
                                                'modalidade',
                                                'planos',
                                                'modalidades',
                                                'plano'
                                                 ));
    }

    public function inserir(Request $request, Plano $plano)
    {
        $response = $plano->inserir($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.plano')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.plano')
                    ->with('error', $response['message']);
    }

    public function alterar(Request $request, $id)
    {
        $planos = Plano::find($id);
        $response = $planos->editar($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.plano')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.plano')
                    ->with('error', $response['message']);
    }

    public function excluir($id)
    {
        Plano::destroy($id);
        return redirect()
                    ->route('admin.plano');
    }
}
