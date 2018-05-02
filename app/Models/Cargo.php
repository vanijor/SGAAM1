<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function addcargo($cargos)
    {
        DB::beginTransaction();

        $addcargos = $this->save();

        $addcargo = Cargo::create([
            'nome' => $cargos,
        ]);

        if ($addcargos){
            DB::commit();
            return [
                'success' => true,
                'message' => 'Sucesso ao Adicionar Cargo!'
            ];
        } else {
            DB::rollback();
            return [
                'success' => false,
                'message' => 'Falha ao Adicionar Cargo!'
            ];
        }
    }
}
