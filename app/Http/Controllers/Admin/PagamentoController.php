<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pagamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Modalidade;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $pages = 5;
    public function index()
    {
        
        $pagamentos = Pagamento::all();
        $pagamentos = Pagamento::paginate($this->pages);   
        return view('admin.pagamento.index', compact('pagamentos'));
    }

    public function editar($id = null)
    {
        $alunos = Aluno::all();
        $modalidades = Modalidade::all();
        if (is_null($id)) {
            $action = '/admin/pagamento/inserir';
            $id_aluno = null;
            $mes_referente = null;
            $dt_vencimento = null;
            $vl_mensalidade = null;
            $modalidade = null;

        
        } else {
            $action = '/admin/pagamento/alterar/' . $id;
            $pagamentos     = Pagamento::find($id);
            $aluno       = $pagamentos->aluno_id;
            $mes_referente  = $pagamentos->mes_referente;
            $dt_vencimento  = $pagamentos->dt_vencimento;
            $vl_mensalidade = $pagamentos->vl_mensalidade;
            $modalidade     = $pagamentos->modalidade_id;
        }

        return view('admin.pagamento.editar', compact(
                                                'id',
                                                'action',
                                                'aluno',
                                                'mes_referente',
                                                'dt_vencimento',
                                                'vl_mensalidade',
                                                'modalidade',
                                                'alunos',
                                                'modalidades'
                                                 ));
    }
    public function inserir(Request $request, Pagamento $pagamento)
    {        
        $alunos = Aluno::all();
        $response = $pagamento->inserir($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.pagamento', compact('alunos'))
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.pagamento')
                    ->with('error', $response['message']);
    }
    public function alterar(Request $request, $id)
    {
        $pagamentos = Pagamento::find($id);
        $response = $pagamentos->editar($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.pagamento')
                    ->with('success', $response['message']);
    
        return redirect()
                    ->route('admin.pagamento')
                    ->with('error', $response['message']);
    }
    public function excluir($id)
    {
        Pagamento::destroy($id);
        return redirect()
                    ->route('admin.pagamento');
    }
}
