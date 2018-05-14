<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pagamento;

class Pagamento extends Model
{   
    public function modalidade()
    {
        return $this->hasMany(Pagamento::class);
    }

    protected $fillable = [
                            'nome',
                            'mes_referente',
                            'dt_vencimento',
                            'vl_mensalidade',
                            'id_aluno',
                            'id_modalidade'
                          ];

    public function inserir($pagamentos) : Array
    {
        $this->nome = $pagamentos['nome'];
        $this->mes_referente = $pagamentos['mes_referente'];
        $this->dt_vencimento = $pagamentos['dt_vencimento'];
        $this->vl_mensalidade = $pagamentos['vl_mensalidade'];
        $this->id_aluno = $pagamentos['id_aluno'];
        $this->id_modalidade = $pagamentos['id_modalidade'];
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Pagamento efetuado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Pagamento'
        ];
    }
    public function editar($alunos) : Array
    {   
        $this->nome = $pagamentos['nome'];
        $this->mes_referente = $pagamentos['mes_referente'];
        $this->dt_vencimento = $pagamentos['dt_vencimento'];
        $this->vl_mensalidade = $pagamentos['vl_mensalidade'];
        $this->id_aluno = $pagamentos['id_aluno'];
        $this->id_modalidade = $pagamentos['id_modalidade'];
        $$edit = $this->save();

        if ($edit)
            return[
                'success' => true,
                'message' => 'Pagamento Editado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Editar o Pagamento'
        ];
    }
}
