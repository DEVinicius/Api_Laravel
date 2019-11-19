<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\User;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;

class UserController extends MasterApiController
{
    protected $model;

   protected $upload = 'image';

   //Encontrar o caminho (pasta)
   protected $path;

   public function __construct(User $pat, Request $req)
   {   
       $this -> model = $pat;
       $this -> request = $req;
   }

   public function select_email($email){
        $data = $this -> model -> all()->where('email',$email);
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
        $data = $this -> model -> all()->where('id_empresa',$id);
        return response() -> json($data);
    }

    public function select_usr_id($id_empresa, $id) 
    {
        $data = $this -> model -> all()->where('id_empresa',$id_empresa) -> where('id',$id );
        return response() -> json($data);
    }

    public function select_usr_nvl($id_empresa, $id_nivel) 
    {
        $data = $this -> model  -> all() ->where('id_empresa',$id_empresa) -> where('id_nivel_usuario', $id_nivel);
        return response() -> json($data);
    }

    public function updateuser(Request $request, $id){

        if(!$data = $this -> model -> find($id))
            return response() -> json(['error' => 'Nada foi encontrado'], 404);

        $this -> validate($request, $this -> model -> rules());

        $dataForm = $request->all();

        if($request -> hasFile($this -> upload) && $request->file($this -> upload)->isValid()) {

            $arquivo = $this -> model -> arquivo($id);

            if($arquivo) {
                Storage::disk('public') -> delete("/{$this -> path}/$arquivo");
            }

            $extension = $request -> file($this -> upload) -> extension();

            $name = uniqid(date('His'));

            $nameFile = "{$name}.{$extension}";

            $upload = Image::make($dataForm[$this -> upload]) -> resize($this -> width, $this -> height)->save(storage_path("app/public_html/storage/$nameFile", 70));
            
            if(!$upload) {
                return response() -> json(['error' => 'Falha ao fazer upload'], 500);
            } else {
                $dataForm[$this -> upload] = $nameFile;
            }
        }

        $data -> update($dataForm);

        return response() -> json($data, 200);

        
    }


}

