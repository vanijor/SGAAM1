<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagamentoController extends Controller
{
    public function index()
    {
        return view('admin.pagamento.index');
    }
}
