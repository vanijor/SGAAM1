<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cargo;
use Carbon\Carbon;
use App\User;

class Funcionario extends Model
{
    protected $fillable = ['nome','rg','cpf',
                           'cep','rua','numero',
                           'bairro','cidade','estado',
                           'nascimento','telefone',
                           'email','cargo', 'user', 'admissao',
                           'demissao'];
    
    public function typeUser($type = null)
    {
        $user = User::find($type);
        $nome = $user->name;

        return $nome;
    }

    public function typeCargo($type)
    {
        $cargo = Cargo::find($type);
        $nome = $cargo->nome;
        
        return $nome;
    }

    public function getDateAttribute($value)
    {
        Carbon::parse($value)->format('d/m/Y');
    }

    public function cargo()
    {
        return $this->hasOne(Cargo::class);
    }
    
    public function inserir($funcionario) : Array
    {   
        $this->nome = $funcionario['nome'];
        $this->rg = $funcionario['rg'];
        $this->cpf = $funcionario['cpf'];
        $this->cep = $funcionario['cep'];
        $this->rua = $funcionario['rua'];
        $this->numero = $funcionario['numero'];
        $this->bairro = $funcionario['bairro'];
        $this->cidade = $funcionario['cidade'];
        $this->estado = $funcionario['estado'];
        $this->dt_nascimento = $funcionario['nascimento'];
        $this->telefone = $funcionario['telefone'];
        $this->email = $funcionario['email'];
        $this->id_cargo = $funcionario['cargo'];
        $this->id_user = $funcionario['user'];
        $this->dt_admissao = $funcionario['admissao'];
        $this->dt_demissao = $funcionario['demissao'];
        
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Funcionário Adicionado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Funcionário'
        ];
    }
    public function editar($funcionario) : Array
    {   
        $this->nome = $funcionario['nome'];
        $this->rg = $funcionario['rg'];
        $this->cpf = $funcionario['cpf'];
        $this->cep = $funcionario['cep'];
        $this->rua = $funcionario['rua'];
        $this->numero = $funcionario['numero'];
        $this->bairro = $funcionario['bairro'];
        $this->cidade = $funcionario['cidade'];
        $this->estado = $funcionario['estado'];
        $this->dt_nascimento = $funcionario['nascimento'];
        $this->telefone = $funcionario['telefone'];
        $this->email = $funcionario['email'];
        $this->id_cargo = $funcionario['cargo'];
        $this->id_user = $funcionario['user'];
        $this->dt_admissao = $funcionario['admissao'];
        $this->dt_demissao = $funcionario['demissao'];
        
        $edit = $this->save();

        if ($edit)
            return[
                'success' => true,
                'message' => 'Funcionário Adicionado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Funcionário'
        ];
    }
}
