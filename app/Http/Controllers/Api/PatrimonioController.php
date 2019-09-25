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
}
