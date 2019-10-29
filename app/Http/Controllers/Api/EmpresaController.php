<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Empresa;

class EmpresaController extends MasterApiController
{
   //tabela do Controller no Banco de Dados
   protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(Empresa $emp, Request $req)
   {   
       $this -> model = $emp;
       $this -> request = $req;
   }

   public function deleteempresa($id){
    if($this -> model -> find($id)) {
        $this -> model -> where('id', $id) -> delete();
        return response() -> json(['success' => 'Deletado com sucesso'], 200);
    }else {
        return response() -> json(['error' => 'Nada foi encontrado'], 404);
    }
}
}
