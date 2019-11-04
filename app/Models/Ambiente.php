<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;
use App\Models\Patrimonio;
use App\Models\Historico;
use App\Models\UserArray;
use App\User;

class Ambiente extends Model
{
    public $timestamps = false;
    
    protected $fillable = [ 
        'nome_ambiente',  
        'id_empresa'
    ];

    public function rules()
    {
        //validação dos campos do formulário
        return [
            'nome_ambiente' => 'required',
            'id_empresa' => 'required'
        ];
    }

    public function empresa()
    {
        return $this -> belongsTo(Empresa::class, 'id_empresa', 'id');  
    }

    public function patrimonio()
    {
        return $this->hasMany(Patrimonio::class, 'id_ambiente', 'id');
    }

    public function historico()
    {
        return $this->hasMany(Historico::class, 'id_ambiente', 'id');
    }

    public function user_array(){
        return $this->belongsToMany(User::class, 'userarrays');
    }
}
