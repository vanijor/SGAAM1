<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    public function index()
    {   
        dd(auth()->professor());
        return view('admin.professor.index');
    }
}
