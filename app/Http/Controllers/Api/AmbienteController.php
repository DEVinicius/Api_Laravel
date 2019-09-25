<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Ambiente;

//Herança da Master Api Controller
class AmbienteController extends MasterApiController
{
    //tabela do Controller no Banco de Dados
    protected $model;

    protected $upload;

    //Encontrar o caminho (pasta)
    protected $path;

    public function __construct(Ambiente $amb, Request $req)
    {   
        $this -> model = $amb;
        $this -> request = $req;
    }
}
