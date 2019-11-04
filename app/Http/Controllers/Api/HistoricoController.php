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

    public function select_hist_emp($id_empresa)
    {
        $data = $this -> model -> all()->where('id_empresa', $id_empresa);
        return response() -> json($data,200);
    }

    public function select_hist_amb($id_empresa, $id_ambiente)
    {
        $data = $this -> model -> all()->where('id_empresa', $id_empresa) -> where('id_ambiente',$id_ambiente);
        return response() -> json($data,200);
    }

    public function select_hist_pat($id_empresa, $id_patrimonio)
    {
        $data = $this -> model -> all()->where('id_empresa', $id_empresa) -> where('id_patrimonio',$id_patrimonio);
        return response() -> json($data,200);
    }

    public function select_hist_acao($id_empresa, $num_acao)
    {
        $data = $this -> model -> all()->where('id_empresa', $id_empresa) -> where('nome_historico',$num_acao);
        return response() -> json($data,200);
    }

    public function deletehistorico($id){
        if($this -> model -> find($id)) {
            $this -> model -> where('id', $id) -> delete();
            return response() -> json(['success' => 'Deletado com sucesso'], 200);
        }else {
            return response() -> json(['error' => 'Nada foi encontrado'], 404);
        }
    }

    public function updatehistorico(Request $req, $id){
        $dados = $req->all();

        $data = $this -> model ->where('id',$id) -> update($dados);
        return response() -> json($data, 200);
    }
}
