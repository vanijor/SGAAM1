<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Pagamento;
use App\Models\Aluno;

class Pagamento extends Model
{   
    public function modalidade()
    {
        return $this->hasMany(Pagamento::class);
    }

    public function aluno()
    {
        return $this->hasOne(Aluno::class);
    }

    public function alunoToPagamento()
    {
        return $aluno = DB::table('alunos');
    }

    protected $fillable = [
                            'nome',
                            'mes_referente',
                            'dt_vencimento',
                            'vl_mensalidade',
                            'id_aluno',
                            'modalidade'
                          ];

    public function inserir($pagamentos) : Array
    {
        $this->nome = $pagamentos['nome'];
        $this->mes_referente = $pagamentos['mes_referente'];
        $this->dt_vencimento = $pagamentos['dt_vencimento'];
        $this->vl_mensalidade = $pagamentos['vl_mensalidade'];
        $this->id_aluno = Aluno::find($id);
        $this->modalidade = $pagamentos['modalidade'];
        $add = $this->save();

        if ($add)
            return[
                'success' => true,
                'message' => 'Pagamento Efetuado com Sucesso!'
            ];
        
        return[
            'success' => false,
            'message' => 'Erro ao Adicionar o Pagamento'
        ];
    }
    public function editar($pagamentos) : Array
    {   
        $this->nome = $pagamentos['nome'];
        $this->mes_referente = $pagamentos['mes_referente'];
        $this->dt_vencimento = $pagamentos['dt_vencimento'];
        $this->vl_mensalidade = $pagamentos['vl_mensalidade'];
        $this->id_aluno = Aluno::find($id);
        $this->modalidade = $pagamentos['modalidade'];
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
