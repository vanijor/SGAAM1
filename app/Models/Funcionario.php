<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cargo;
use Carbon\Carbon;

class Funcionario extends Model
{
    protected $fillable = ['nome','rg','cpf','cep','rua','numero','bairro','cidade','estado','dt_nascimento','telefone','email'];
    
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
        $this->nome = $funcionario;
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
