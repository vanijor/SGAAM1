<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user()->name;
        return view('admin.home.index', compact('user'));
    }
}
