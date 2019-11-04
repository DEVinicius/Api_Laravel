<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Contatos;

class ContatosController extends MasterApiController
{
    //tabela do Controller no Banco de Dados
   protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(Contatos $cont, Request $req)
   {   
       $this -> model = $cont;
       $this -> request = $req;
   }
}
