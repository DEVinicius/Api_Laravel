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

   public function pesquisa($texto, $id_empresa){
        $data = $this -> model -> where('id_empresa',$id_empresa) -> where('nome_patrimonio', 'like', '%'.$texto.'%')-> where('id_nivel_usuario', $id_nivel)-> get();
        return response() -> json($data);
    }

   public function select_esp($id)
    {
        $data = $this -> model -> all()->where('id_empresa', $id);
        return response() -> json($data,200);
    }

    public function select_pat_esp($id_empresa,$id_ambiente)
    {
        $data = $this -> model -> all()->where('id_empresa', $id_empresa) -> where('id_ambiente', $id_ambiente);
        return response() -> json($data,200);
    }

    public function select_pat($id_empresa,$id_patrimonio)
    {
        $data = $this -> model -> all()->where('id_empresa', $id_empresa) -> where('id', $id_patrimonio);
        return response() -> json($data,200);
    }

    public function deletepatrimonio($id){
        if($this -> model -> find($id)) {
            $this -> model -> where('id', $id) -> delete();
            return response() -> json(['success' => 'Deletado com sucesso'], 200);
        }else {
            return response() -> json(['error' => 'Nada foi encontrado'], 404);
        }
    }

    public function updatepatrimonio(Request $req, $id){
        $dados = $req->all();

        $data = $this -> model ->where('id',$id) -> update($dados);
        return response() -> json($data, 200);
    }
}
