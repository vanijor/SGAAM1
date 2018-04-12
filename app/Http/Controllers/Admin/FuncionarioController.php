<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FuncionarioController extends Controller
{
    public function index()
    {
        dd(auth()->user());
        return view('admin.funcionario.index');
    }
}
