<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Modalidade;
use App\Models\Professor;
use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    private $pages = 3;

    public function index()
    {
        $modalidades = Modalidade::all();
        $modalidades = Modalidade::paginate($this->pages);
        return view('admin.modalidade.index', compact('modalidades'));
    }

    public function editar($id = null)
    {
        $professores = Professor::all();
        if (is_null($id)) {
            $action = '/admin/modalidade/inserir';
            $modalidade = null;
            $semanal = null;
            $horas = null;
            $professor = null;
        } else {
            $action = '/admin/modalidade/alterar/' . $id;
            $modalidades = Modalidade::find($id);
            $modalidade = $modalidades->nome;
            $semanal = $modalidades->qt_aulasem;
            $horas = $modalidades->qt_hraula;
            $professor = $modalidades->professor_id;
        }
        return view('admin.modalidade.editar', compact(
                                                       'id',
                                                       'action',
                                                       'modalidade',
                                                       'semanal',
                                                       'horas',
                                                       'professor',
                                                       'professores',
                                                       'modalidades'
                                                       ));
    }

    public function inserir(Request $request, Modalidade $modalidade)
    {
        $response = $modalidade->inserir($request->all());

        if ($response['success']) {
            return redirect()
                ->route('admin.modalidade')
                ->with('success', $response['message']);
        }

        return redirect()
            ->route('admin.modalidade')
            ->with('error', $response['message']);
    }

    public function alterar(Request $request, $id)
    {
        $modalidade = Modalidade::find($id);
        $response = $modalidade->editar($request->all());

        if ($response['success']) {
            return redirect()
                ->route('admin.modalidade')
                ->with('success', $response['message']);
        }

        return redirect()
            ->route('admin.modalidade')
            ->with('error', $response['message']);
    }

    public function excluir($id)
    {
        Modalidade::destroy($id);
        return redirect()
            ->route('admin.modalidade');
    }
}
