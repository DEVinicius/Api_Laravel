<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Ambiente;

//Herança da Master Api Controller
class AmbienteController extends MasterApiController
{
    //tabela do Controller no Banco de Dados
    protected $model;

    protected $upload;

    //Encontrar o caminho (pasta)
    protected $path;

    public function insertamb(Request $req)
    {   
        $dados = $req->all();

        $user_Array = array();
        $ambiente = array();

        for($i = 0; $i<4; $i++)
        {
            if($i<2){
                array_push($user_Array, $dados[$i]);
            }
            else{
                array_push($ambiente, $dados[$i]);
            }
        }

        $data1 = $this -> model -> create($user_Array);
        $data2 = $this -> model -> create($ambiente);

        return response() -> json($data1) && response() -> json($data2);

    }

    public function __construct(Ambiente $amb, Request $req)
    {   
        $this -> model = $amb;
        $this -> request = $req;
    }

    public function select_esp($id)
    {
        $data = $this -> model -> with('user_arrays') ->get()-> where('id_empresa', $id);
        return response() -> json($data);
    }

    public function select_amb($id_empresa, $id) 
    {
        $data = $this -> model -> with('user_arrays') ->get()->where('id_empresa',$id_empresa) -> where('id', $id);
        return response() -> json($data);
    }

    public function deleteambiente($id){
        if($this -> model -> find($id)) {
            $this -> model -> where('id', $id) -> delete();
            return response() -> json(['success' => 'Deletado com sucesso'], 200);
        }else {
            return response() -> json(['error' => 'Nada foi encontrado'], 404);
        }
    }

    public function updateambiente(Request $req, $id){
        $dados = $req->all();

        $data = $this -> model ->where('id',$id) -> update($dados);
        return response() -> json($data, 200);
    }
}
    