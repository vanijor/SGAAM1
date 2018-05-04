<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['nome'];
    
    public function inserir($cargo) : Array
    {
        $this->nome = $cargo;
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Cargo Adicionado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Cargo'
        ];
    }
    public function editar($cargo, $id) : Array
    {
        $this->nome = $cargo;
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Cargo Editado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Editar o Cargo'
        ];
    }
}
