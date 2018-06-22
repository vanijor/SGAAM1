<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Modalidade;
use App\Models\Chamada;
use App\Models\Plano;
use Symfony\Component\Console\Input\Input;

class Aluno extends Model
{   
    public function modalidade()
    {
        return $this->hasMany(Modalidade::class);
    }

    public function chamada()
    {
        return $this->hasMany(Chamada::class);
    }
    
    public function plano()
    {
        return $this->hasMany(Plano::class);
    }

    public function typeModa($type)
    {   
        $modalidade = Modalidade::find($type);
        if (empty($modalidade)){

        } else {
        $nome = $modalidade->nome;
        return $nome;
        }
    }
    
    public function typePlano($type = null)
    {
        $plano = Plano::find($type);
        if (empty($plano)){
            
        } else {
            $nome = $plano->tipo;
            return $nome;
        }
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
                            'plano_id',
                            'modalidade_id'
                          ];

    public function inserir($alunos) : Array
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
        $this->plano_id = $alunos['plano'];
        $this->modalidade_id = $alunos['modalidade'];
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
        $this->plano_id = $alunos['plano'];
        $this->modalidade_id = $alunos['modalidade'];
        $edit = $this->save();

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
