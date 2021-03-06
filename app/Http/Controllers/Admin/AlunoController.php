<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Modalidade;
use App\Models\Plano;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $pages = 5;
    public function index()
    {
        $alunos = Aluno::all();
        $alunos = Aluno::paginate($this->pages);   
        return view('admin.aluno.index', compact('alunos'));
    }

    public function editar($id = null)
    {
        $planos = Plano::all();
        $modalidades = Modalidade::all();
        if (is_null($id)) {
            $action = '/admin/aluno/inserir';
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
            $plano = null;
            $modalidade = null;
        
        } else {
            $action = '/admin/aluno/alterar/' . $id;
            $alunos = Aluno::find($id);
            $nome = $alunos->nome;
            $rg = $alunos->rg;
            $cpf = $alunos->cpf;
            $cep = $alunos->cep;
            $rua = $alunos->rua;
            $numero = $alunos->numero;
            $bairro = $alunos->bairro;
            $cidade = $alunos->cidade;
            $estado = $alunos->estado;
            $nascimento = $alunos->dt_nascimento;
            $telefone = $alunos->telefone;
            $email = $alunos->email;
            $plano = $alunos->plano_id;
            $modalidade = $alunos->modalidade_id;
            
        }
        return view('admin.aluno.editar', compact(
                                                'id',
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
                                                'plano',
                                                'modalidade',
                                                'modalidades',
                                                'planos',
                                                'alunos'
                                                 ));
    }
    public function inserir(Request $request, Aluno $aluno)
    {        
        
        $response = $aluno->inserir($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.aluno')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.aluno')
                    ->with('error', $response['message']);
    }
    public function alterar(Request $request, $id)
    {
        $alunos = Aluno::find($id);
        $response = $alunos->editar($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.aluno')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.aluno')
                    ->with('error', $response['message']);
    }
    public function excluir($id)
    {
        Aluno::destroy($id);
        return redirect()
                    ->route('admin.aluno');
    }
}
