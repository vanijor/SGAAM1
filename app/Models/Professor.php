<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;
use App\Models\Modalidade;

class Professor extends Model
{
   

    public function modalidade()
    {
        return $this->hasOne(Modalidade::class);
    }

    protected $fillable = ['nome', 'modalidade'];

    public function typeFunc($type = null)
    {
        $funcionario = Funcionario::find($type);
        $nome = $funcionario->nome;

        return $nome;
    }

    public function typeModa($type = null)
    {
        $modalidade = Modalidade::find($type);
        $nome = $modalidade->nome;

        return $nome;
    }
    
    public function inserir($professores) : Array
    {
        $this->id_funcionario = $professores['nome'];
        $this->id_modalidade = $professores['modalidade'];
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
        $this->id_funcionario = $professores['nome'];
        $this->id_modalidade = $professores['modalidade'];
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
