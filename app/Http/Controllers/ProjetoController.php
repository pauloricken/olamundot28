<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        return view('projeto'); // ou qualquer view que você tenha criado
    }
}
