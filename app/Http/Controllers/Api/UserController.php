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

   public function select_email($email){
        $data = $this -> model -> with('user_arrays') ->get()->where('email',$email);
        return response() -> json($data);
   }

   public function deleteuser($id){
        if($this -> model -> find($id)) {
            $this -> model -> where('id', $id) -> delete();
            return response() -> json(['success' => 'Deletado com sucesso'], 200);
        }else {
            return response() -> json(['error' => 'Nada foi encontrado'], 404);
        }
    }

    public function select_usr_esp($id) 
    {
        $data = $this -> model -> with('user_arrays') ->get()->where('id_empresa',$id);
        return response() -> json($data);
    }

    public function select_usr_id($id_empresa, $id) 
    {
        $data = $this -> model -> with('user_arrays') ->get()->where('id_empresa',$id_empresa) -> where('id',$id );
        return response() -> json($data);
    }

    public function select_usr_nvl($id_empresa, $id_nivel) 
    {
        $data = $this -> model -> with('user_arrays') ->get()->where('id_empresa',$id_empresa) -> where('id_nivel_usuario', $id_nivel);
        return response() -> json($data);
    }

    public function updateuser(Request $req, $id){
        $dados = $req->all();

        $data = $this -> model ->where('id',$id) -> update($dados);
        return response() -> json($data, 200);
    }
}

