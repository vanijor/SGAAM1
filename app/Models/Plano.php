<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = ['tipo', 'forma_pagamento', 'modalidade_id'];

    public function typeModa($type)
    {   
        $modalidade = Modalidade::find($type);
        if (empty($modalidade)){

        } else {
        $nome = $modalidade->nome;
        return $nome;
        }
    }

    public function inserir($planos): array
    {
        $this->tipo = $planos['tipopgto'];
        $this->forma_pagamento = $planos['formapgto'];
        $this->modalidade_id = $planos['modalidade'];
        $add = $this->save();

        if ($add) {
            return [
                'success' => true,
                'message' => 'Plano Adicionado com Sucesso!',
            ];
        }

        return [
            'success' => false,
            'message' => 'Erro ao Adicionar o Plano',
        ];
    }
    public function editar($planos): array
    {
        $this->tipo = $planos['tipopgto'];
        $this->forma_pagamento = $planos['formapgto'];
        $this->modalidade_id = $planos['modalidade'];
        $edit = $this->save();

        if ($edit) {
            return [
                'success' => true,
                'message' => 'Plano Editado com Sucesso!',
            ];
        }

        return [
            'success' => false,
            'message' => 'Erro ao Editar o Plano',
        ];
    }

}
