<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\User;

class UserController extends MasterApiController
{
    protected $model;

   protected $upload;

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(User $pat, Request $req)
   {   
       $this -> model = $pat;
       $this -> request = $req;
   }

    public function index() 
    {
        $data = $this -> model -> with('user_arrays') ->get()->where(['id_empresa'=>'']);
        return response() -> json($data);
    }
}
