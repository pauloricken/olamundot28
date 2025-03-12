<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servidor;

class contatoController extends Controller
{
    public function index()
    {
        $servidor = new servidor();
        $dados = ['titulo' => 'Página de Contato'
        , 'emails' => ['unidavi' => 'sandroaf@unidavi.edu.br', 'gmail' => 'sandroaf@gmail.com', 'Área Local' => 'sandro@arealocal.com.br']
        ,'script' => $servidor->getAtributo('SCRIPT_NAME')
        ,'data' => $servidor->getData()
        ];

        return view('contato', $dados);
    }

}
