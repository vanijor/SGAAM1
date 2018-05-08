<?php

namespace App\Http\Controllers\Admin;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuncionarioValidationFormRequest;

class FuncionarioController extends Controller
{
    public function index()
    {   
        $funcionarios  = Funcionario::all();
        return view('admin.funcionario.index', compact('funcionarios','cargos'));
    }

    public function editar($id = null)
    {
        if (is_null($id)) {
            $action = '/admin/funcionario/inserir';
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
            $cargo = null;
            $user = null;
            $admissao = null;
            $demissao = null;
        } else {
            $action = '/admin/funcionario/alterar/' . $id;
            $funcionario = Funcionario::find($id);
            $nome = $funcionario->nome;
            $rg = $funcionario->rg;
            $cpf = $funcionario->cpf;
            $cep = $funcionario->cep;
            $rua = $funcionario->rua;
            $numero = $funcionario->numero;
            $bairro = $funcionario->bairro;
            $cidade = $funcionario->cidade;
            $estado = $funcionario->estado;
            $nascimento = $funcionario->dt_nascimento;
            $telefone = $funcionario->telefone;
            $email = $funcionario->email;
            $cargo = $funcionario->id_cargo;
            $user = $funcionario->id_user;
            $admissao = $funcionario->dt_admissao;
            $demissao = $funcionario->dt_demissao;
        }
        return view('admin.funcionario.editar', 
                                    compact('id', 'action', 
                                            'nome','rg','cpf',
                                            'cep','rua','numero',
                                            'bairro','cidade','estado',
                                            'nascimento','telefone',
                                            'email','cargo', 'user', 'admissao',
                                            'demissao'));
    }

    public function inserir(FuncionarioValidationFormRequest $request, Funcionario $funcionario)
    {
        $response = $funcionario->inserir($request->all());

        if ($response['success'])
        return redirect()
                    ->route('admin.funcionario')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.funcionario')
                    ->with('error', $response['message']);
    }

    public function alterar(FuncionarioValidationFormRequest $request, $id)
    {
        $funcionario = Funcionario::find($id);
        $response = $funcionario->editar($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.funcionario')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.funcionario')
                    ->with('error', $response['message']);
    }

    public function excluir($id)
    {
        Funcionario::destroy($id);
        return redirect()
                    ->route('admin.funcionario');
    }
}
