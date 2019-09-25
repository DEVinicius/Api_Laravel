<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Setor;
use App\Models\Patrimonio;
use App\Models\Historico;

class Ambiente extends Model
{
    protected $fillable = [ 
        'nome_ambiente', 
        'quantidade_patrimonio', 
        'id_setor'
    ];

    public function rules()
    {
        //validação dos campos do formulário
        return [
            'nome_ambiente' => 'required',
            'quantidade_patrimonio' => 'required',
            'id_setor' => 'required'
        ];
    }

    public function setor()
    {
        return $this -> belongsTo(Setor::class, 'id_setor', 'id');  
    }

    public function patrimonio()
    {
        return $this->hasMany(Patrimonio::class, 'id_ambiente', 'id');
    }

    public function historico()
    {
        return $this->hasMany(Historico::class, 'id_ambiente', 'id');
    }
}
