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

    public function select_esp($id)
    {
        $data = $this -> model -> all() -> where('id_empresa', $id);
        return response() -> json($data,200);
    }

    public function select_amb($id_empresa, $id)
    {
        $data = $this -> model -> all() -> where('id',$id) -> where('id_empresa',$id_empresa);
        return response() -> json($data,200);
    }
}
