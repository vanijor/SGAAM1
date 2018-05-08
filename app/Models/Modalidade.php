<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $fillable = ['modalidade','semanal','horas','professor'];
    
    public function inserir($modalidade) : Array
    {
        $this->nome = $modalidade['modalidade'];
        $this->qt_aulasem = $modalidade['semanal'];
        $this->qt_hraula = $modalidade['horas'];
        $this->id_professor = $modalidade['professor'];

        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Modalidade Adicionada com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar a Modalidade'
        ];
    }
    public function editar($modalidade) : Array
    {   
        $this->nome = $modalidade['modalidade'];
        $this->qt_aulasem = $modalidade['semanal'];
        $this->qt_hraula = $modalidade['horas'];
        $this->id_professor = $modalidade['professor'];
        
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Modalidade Editada com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Editar a Modalidade'
        ];
    }
}
