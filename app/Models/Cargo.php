<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cargo extends Model
{
   public function add($cargo) : Array
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
}
