<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modalidade;

class Professor extends Model
{
   

    public function modalidade()
    {
        return $this->hasOne(Modalidade::class);
    }

    protected $fillable = [ 'nome',
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
                            'modalidade',];


    public function typeModa($type = null)
    {
        $modalidade = Modalidade::find($type);
        $nome = $modalidade->nome;

        return $nome;
    }
    
    public function inserir($professores) : Array
    {
        $this->nome = $professores['nome'];
        $this->rg = $professores['rg'];
        $this->cpf = $professores['cpf'];
        $this->cep = $professores['cep'];
        $this->rua = $professores['rua'];
        $this->numero = $professores['numero'];
        $this->bairro = $professores['bairro'];
        $this->cidade = $professores['cidade'];
        $this->estado = $professores['estado'];
        $this->nascimento = $professores['nascimento'];
        $this->telefone = $professores['telefone'];
        $this->email = $professores['email'];
        $this->modalidade_id = $professores['modalidade'];
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Professor Adicionado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Professor'
        ];
    }
    public function editar($professores) : Array
    {   
        $this->nome = $professores['nome'];
        $this->rg = $professores['rg'];
        $this->cpf = $professores['cpf'];
        $this->cep = $professores['cep'];
        $this->rua = $professores['rua'];
        $this->numero = $professores['numero'];
        $this->bairro = $professores['bairro'];
        $this->cidade = $professores['cidade'];
        $this->estado = $professores['estado'];
        $this->nascimento = $professores['nascimento'];
        $this->telefone = $professores['telefone'];
        $this->email = $professores['email'];
        $this->modalidade_id = $professores['modalidade'];
        $edit = $this->save();

        if ($edit)
            return[
                'success' => true,
                'message' => 'Professor Editado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Editar o Professor'
        ];
    }
}
