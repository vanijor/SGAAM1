<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StringValidationFormRequest;

class CargoController extends Controller
{
    protected $fillable = ['nome'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $cargos = Cargo::all();
        return view('admin.cargo.index', compact('cargos'));
    }    

    public function add()
    {
        return view('admin.cargo.add');
    }

    public function addcargo(StringValidationFormRequest $request, Cargo $cargo)
    {
        $cargo->add($request->cargo);
    }
}
