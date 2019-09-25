<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;
use App\Models\Ambiente;

class Setor extends Model
{
    protected $fillable = [
        'nome_setor', 'id_empresa'
    ];

    public function rules()
    {
        return [
            'nome_setor' => 'required',
            'id_empresa' => 'required'
        ];
    }

    public function empresa()
    {
        return $this -> belongsTo(Empresa::class, 'id_empresa', 'id');  
    }

    public function setor()
    {
        return $this -> hasMany(Ambiente::class, 'id_setor', 'id');
    }

}
