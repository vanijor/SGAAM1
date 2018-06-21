<?php

namespace App\Http\Controllers\Admin;

use App\Models\Professor;
use App\Models\Modalidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfessorInserirValidationFormRequest;
use App\Http\Requests\ProfessorEditarValidationFormRequest;

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
        $professores = Professor::all();
        $modalidades = Modalidade::all();
        if (is_null($id)) {
            $action = '/admin/professor/inserir';
            $nome = null;
            $rg = null;
            $cpf = null;
            $cep = null;
            $rua = null;
            $numero = null;
            $bairro = null;
            $cidade = null;
            $estado = null;
            $nascimento = null;
            $telefone = null;
            $email = null;
            $modalidade = null;
        } else {
            $action = '/admin/professor/alterar/' . $id;
            $professores = Professor::find($id);
            $nome = $professores->nome;
            $rg = $professores->rg;
            $cpf = $professores->cpf;
            $cep = $professores->cep;
            $rua = $professores->rua;
            $numero = $professores->numero;
            $bairro = $professores->bairro;
            $cidade = $professores->cidade;
            $estado = $professores->estado;
            $nascimento = $professores->nascimento;
            $telefone = $professores->telefone;
            $email = $professores->email;
            $modalidade = $professores->modalidade_id;
        }
        return view('admin.professor.editar', compact(  'id',
                                                        'action',
                                                        'nome',
                                                        'rg',
                                                        'cpf',
                                                        'cep',
                                                        'rua',
                                                        'numero',
                                                        'bairro',
                                                        'cidade',
                                                        'estado',
                                                        'nascimento',
                                                        'telefone',
                                                        'email',
                                                        'modalidade',
                                                        'modalidades',
                                                        'professores'
                                                        ));
    }

    public function inserir(ProfessorInserirValidationFormRequest $request, Professor $professores)
    {        
        $response = $professores->inserir($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.professor')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.professor')
                    ->with('error', $response['message']);
    }

    public function alterar(ProfessorEditarValidationFormRequest $request, $id)
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
