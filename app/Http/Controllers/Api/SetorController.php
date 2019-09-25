<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Setor;

class SetorController extends MasterApiController
{
    //tabela do Controller no Banco de Dados
   protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(Setor $set, Request $req)
   {   
       $this -> model = $set;
       $this -> request = $req;
   }
}
