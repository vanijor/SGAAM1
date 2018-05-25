<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modalidade;
use Symfony\Component\Console\Input\Input;

class Aluno extends Model
{   
    public function modalidade()
    {
        return $this->hasMany(Modalidade::class);
    }

    protected $fillable = [ 'id',
                            'nome',
                            'cpf',
                            'rg',
                            'cep',
                            'rua',
                            'numero',
                            'bairro',
                            'cidade',
                            'estado',
                            'dt_nascimento',
                            'telefone',
                            'email',
                            'id_plano',
                            'id_modalidade'
                          ];

    public function inserir($alunos) : Array
    {
        $this->id = $alunos('id');
        $this->nome = $alunos['nome'];
        $this->cpf = $alunos['cpf'];
        $this->rg = $alunos['rg'];
        $this->cep = $alunos['cep'];
        $this->rua = $alunos['rua'];
        $this->numero = $alunos['numero'];
        $this->bairro = $alunos['bairro'];
        $this->cidade = $alunos['cidade'];
        $this->estado = $alunos['estado'];
        $this->dt_nascimento = $alunos['nascimento'];
        $this->telefone = $alunos['telefone'];
        $this->email = $alunos['email'];
        $this->id_plano = $alunos['plano'];
        $this->id_modalidade = $alunos['modalidade'];
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Aluno Adicionado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Aluno'
        ];
    }
    public function editar($alunos) : Array
    {   
        $this->nome = $alunos['nome'];
        $this->cpf = $alunos['cpf'];
        $this->rg = $alunos['rg'];
        $this->cep = $alunos['cep'];
        $this->rua = $alunos['rua'];
        $this->numero = $alunos['numero'];
        $this->bairro = $alunos['bairro'];
        $this->cidade = $alunos['cidade'];
        $this->estado = $alunos['estado'];
        $this->dt_nascimento = $alunos['nascimento'];
        $this->telefone = $alunos['telefone'];
        $this->email = $alunos['email'];
        $this->id_plano = $alunos['plano'];
        $this->id_modalidade = $alunos['modalidade'];
        $$edit = $this->save();

        if ($edit)
            return[
                'success' => true,
                'message' => 'Aluno Editado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Editar o Aluno'
        ];
    }
}
