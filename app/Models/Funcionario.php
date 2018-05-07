<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cargo;
use Carbon\Carbon;

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
        $types = [
                '1' => 'Admin',
                '2' => 'Professor',
                '3' => 'Balconista',
        ];
        if (!$type)
            return $types;
        
        return $types[$type];
    }

    public function typeCargo($type = null)
    {
        $types = [
                '1' => 'Professor',
                '2' => 'Balconista',
                '3' => 'Faxineiro',
        ];
        if (!$type)
            return $types;
        
        return $types[$type];
    }

    public function getDateAttibute($value)
    {
        Carbon::parse($value)->format('d/m/Y');
    }

    public function cargo()
    {
        return $this->hasOne(Cargo::class);
    }
    
    public function inserir($funcionario) : Array
    {   
        dd($funcionario->nome);
        $this->rg = $funcionario;
        $this->cpf = $funcionario;
        $this->cep = $funcionario;
        $this->rua = $funcionario;
        $this->numero = $funcionario;
        $this->bairro = $funcionario;
        $this->cidade = $funcionario;
        $this->estado = $funcionario;
        $this->dt_nascimento = $funcionario;
        $this->telefone = $funcionario;
        $this->email = $funcionario;
        $this->id_cargo = $funcionario;
        $this->id_user = $funcionario;
        $this->dt_admissao = $funcionario;
        $this->dt_demissao = $funcionario;

        $add = ['nome'            => $this->nome,
                'rg'              => $this->rg,
                'cpf'             => $cpf,
                'cep'             => $cep,
                'cep'             => $cep,
                'rua'             => $rua,
                'numero'          => $numero,
                'bairro'          => $bairro,
                'cidade'          => $cidade,
                'estado'          => $estado,
                'dt_nascimento'   => $nascimento,
                'telefone'        => $telefone,
                'email'           => $email,
                'id_cargo'        => $cargo,
                'id_user'         => $user,
                'dt_admissao'     => $admissao,
                'dt_demissao'     => $demissao,
                ];
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
}
