<?php

namespace App\Models;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $fillable = ['aluno_id', 'presente'];

    public function aluno()
    {
        return $this->hasMany(Aluno::class);
    }

    public function typeAluno($type = null)
    {
        $alunos = Aluno::find($type);
        if (empty($professor)){

        } else {
            $nome = $alunos->nome;
            return $nome;
        }        
    }
}
