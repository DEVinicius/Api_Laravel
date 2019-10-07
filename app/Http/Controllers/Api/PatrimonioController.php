<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Patrimonio;

class PatrimonioController extends MasterApiController
{
    //tabela do Controller no Banco de Dados
   protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(Patrimonio $pat, Request $req)
   {   
       $this -> model = $pat;
       $this -> request = $req;
   }

   public function select_esp($id)
    {
        $data = $this -> model -> all()->where('id_empresa', $id);
        return response() -> json($data,200);
    }

    public function select_amb_esp($id_patrimonio)
    {
        $data = $this -> model -> all()->where('id', $id_patrimonio);
        return response() -> json($data,200);
    }
}
