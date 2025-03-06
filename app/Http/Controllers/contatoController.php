<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{
    public function index()
    {
        $dados = ['titulo' => 'Página de Contato'
        , 'email' => 'sandroaf@unidavi.edu.br'];

        return view('contato', $dados);
    }

}
