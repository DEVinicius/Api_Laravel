<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DadosUsuarioController extends Controller
{
    //tabela do Controller no Banco de Dados
    protected $model;

    protected $upload;

    //Encontrar o caminho (pasta)
    protected $path;

    public function __construct(DadosUsuario $amb, Request $req)
    {   
        $this -> model = $amb;
        $this -> request = $req;
    }
}
