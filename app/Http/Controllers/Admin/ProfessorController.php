<?php

namespace App\Http\Controllers\Admin;

use App\Models\Professor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $pages = 5;
    public function index()
    {
        $professores = Professor::all();
        $professores = Professor::paginate($this->pages);
        return view('admin.professor.index', compact('professores') );
    }

    public function editar($id = null)
    {
        if (is_null($id)) {
            $action = '/admin/professor/inserir';
            $nome = null;
            $modalidade = null;
        } else {
            $action = '/admin/professor/alterar/' . $id;
            $professores = Professor::find($id);
            $nome = $professores->nome;
            $modalidade = $professores->modalidade;
        }
        return view('admin.professor.editar', compact('id', 'action', 'nome', 'modalidade'));
    }

    public function inserir(Request $request, Professor $professores)
    {        
        // dd($request->all());
        $response = $professores->inserir($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.professor')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.professor')
                    ->with('error', $response['message']);
    }

    public function alterar(Request $request, $id)
    {
        $professores = Professor::find($id);
        $response = $professores->editar($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.professor')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.professor')
                    ->with('error', $response['message']);
    }

    public function excluir($id)
    {
        Professor::destroy($id);
        return redirect()
                    ->route('admin.professor');
    }
}
