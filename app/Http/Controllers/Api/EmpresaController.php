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
}
