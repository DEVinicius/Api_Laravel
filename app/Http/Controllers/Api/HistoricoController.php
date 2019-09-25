<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Historico;
use App\Http\Controllers\MasterApiController;

class HistoricoController extends MasterApiController
{
     //tabela do Controller no Banco de Dados
   protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(Historico $pat, Request $req)
   {   
       $this -> model = $pat;
       $this -> request = $req;
   }
}
