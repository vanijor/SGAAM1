<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StringValidationFormRequest;
Use DB;

class CargoController extends Controller
{
    public function index()
    {   
        $cargos = Cargo::all();
        return view('admin.cargo.index', compact('cargos'));
    }    

    public function editar($id = null)
    {
        if (is_null($id)) {
            $action = 'inserir';
            $nome = null;
        } else {
            $action = '/admin/cargo/alterar/' . $id;
            $cargo = Cargo::find($id);
            $nome = $cargo->nome;
        }
        return view('admin.cargo.editar', compact('id', 'action', 'nome'));
    }

    public function inserir(StringValidationFormRequest $request, Cargo $cargo)
    {
        $cargo->inserir($request->cargo);
        if ($cargo['success'])
        return redirect()
                    ->route('admin.cargo')
                    ->with('success', $cargo['message']);
    
        return redirect()
                    ->route('admin.cargo')
                    ->with('error', $cargo['message']);
    }

    public function alterar(StringValidationFormRequest $request, $id)
    {
        $cargo = Cargo::find($id);
        $cargo->nome = $request->cargo;
        $cargo->save();
        
        return redirect()
                    ->route('admin.cargo');
    }

    public function excluir($id)
    {
        Cargo::destroy($id);
        return redirect()
                    ->route('admin.cargo');
    }
}
