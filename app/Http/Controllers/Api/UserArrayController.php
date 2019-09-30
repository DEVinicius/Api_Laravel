<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\UserArray;

class UserArrayController extends MasterApiController
{
    protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(UserArray $pat, Request $req)
   {   
       $this -> model = $pat;
       $this -> request = $req;
   }
}
