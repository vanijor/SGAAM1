<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StringValidationFormRequest;

class CargoController extends Controller
{
    private $pages = 3; 

    public function index()
    {   
        $cargos = Cargo::all();
        $cargos = Cargo::paginate($this->pages);
        return view('admin.cargo.index', compact('cargos'));
    }    

    public function editar($id = null)
    {
        if (is_null($id)) {
            $action = '/admin/cargo/inserir';
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
        $response = $cargo->inserir($request->cargo);
        
        if ($response['success'])
        return redirect()
                    ->route('admin.cargo')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.cargo')
                    ->with('error', $response['message']);
    }

    public function alterar(StringValidationFormRequest $request, $id)
    {
        $cargo = Cargo::find($id);
        $response = $cargo->editar($request->cargo);
        
        if ($response['success'])
        return redirect()
                    ->route('admin.cargo')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.cargo')
                    ->with('error', $response['message']);
    }

    public function excluir($id)
    {
        Cargo::destroy($id);
        return redirect()
                    ->route('admin.cargo');
    }
}
