<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pagamento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        if (is_null($id)) {
            $action = '/admin/pagamento/inserir';
            $nome = null;
            $mes_referente = null;
            $dt_vencimento = null;
            $vl_mensalidade = null;
            $id_aluno = null;
            $id_modalidade = null;
        
        } else {
            $action = '/admin/pagamento/alterar/' . $id;
            $pagamentos = Pagamento::find($id);
            $nome = $pagamentos->nome;
            $mes_referente = $pagamentos->mes_referente;
            $dt_vencimento = $pagamentos->dt_vencimento;
            $vl_mensalidade = $pagamentos->vl_mensalidade;
            $id_aluno = $pagamentos->id_aluno;
            $id_modalidade = $pagamentos->id_modalidade;

        }
        return view('admin.pagamento.editar', compact(
                                                'id',
                                                'action',
                                                'nome',
                                                'mes_referente',
                                                'dt_vencimento',
                                                'vl_mensalidade',
                                                'id_aluno',
                                                'id_modalidade'
                                                 ));
    }
    public function inserir(Request $request, Pagamento $pagamento)
    {        
        // dd($request->all());
        $response = $pagamento->inserir($request->all());
        
        if ($response['success'])
        return redirect()
                    ->route('admin.pagamento')
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
