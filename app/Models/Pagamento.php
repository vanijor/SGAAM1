<?php

namespace App\Models;

use App\Models\Aluno;
use App\Models\Modalidade;
use App\Models\Pagamento;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [
        'aluno_id',
        'mes_referente',
        'dt_vencimento',
        'vl_mensalidade',
        'modalidade_id',
    ];
    public function modalidade()
    {
        return $this->hasMany(Pagamento::class);
    }

    public function aluno()
    {
        return $this->hasOne(Aluno::class);
    }

    public function typeAluno($type = null)
    {
        $aluno = Aluno::find($type);
        $nome = $aluno->nome;

        return $nome;
    }

    public function typeModa($type = null)
    {
        $modalidade = Modalidade::find($type);
        $nome = $modalidade->nome;

        return $nome;
    }

    public function inserir($pagamentos): array
    {
        $this->aluno_id = $pagamentos['aluno'];
        $this->mes_referente = $pagamentos['mes_referente'];
        $this->dt_vencimento = $pagamentos['dt_vencimento'];
        $this->vl_mensalidade = $pagamentos['vl_mensalidade'];
        $this->modalidade_id = $pagamentos['modalidade'];
        $add = $this->save();

        if ($add) {
            return [
                'success' => true,
                'message' => 'Pagamento Efetuado com Sucesso!',
            ];
        }

        return [
            'success' => false,
            'message' => 'Erro ao Adicionar o Pagamento',
        ];
    }
    public function editar($pagamentos): array
    {
        $this->aluno_id = $pagamentos['nome'];
        $this->mes_referente = $pagamentos['mes_referente'];
        $this->dt_vencimento = $pagamentos['dt_vencimento'];
        $this->vl_mensalidade = $pagamentos['vl_mensalidade'];
        $this->modalidade_id = $pagamentos['modalidade'];
        $$edit = $this->save();

        if ($edit) {
            return [
                'success' => true,
                'message' => 'Pagamento Editado com Sucesso!',
            ];
        }

        return [
            'success' => false,
            'message' => 'Erro ao Editar o Pagamento',
        ];
    }
}
