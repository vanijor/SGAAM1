<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Chamada;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function index()
    {
        $mytime = Carbon::now();
        $mytime = Carbon::parse($mytime)->format('d/m/Y');
        $alunos = Aluno::all();
        return view('admin.chamada.index', compact('alunos', 'mytime'));
    }

    public function inserir(Request $request)
    {
        foreach ($request->aluno_id as $id) {

            Chamada::create([
                'aluno_id' => $id, 
                'presente' => $request->presente[$id]
            ]);

        }

        return redirect()
            ->route('admin.aluno');

    }
}
