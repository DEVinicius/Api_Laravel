<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ambiente;
use App\Models\Empresa;

class Patrimonio extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'nome_patrimonio',
        'descricao',
        'id_ambiente',
        'codigo_patrimonio',
        'id_empresa'
    ];

    public function rules()
    {
        return [
            'nome_patrimonio' => 'required',
            'descricao' => 'required',
            'id_ambiente' => 'required',
            'id_empresa' => 'required',
            'codigo_patrimonio' => 'required|unique:patrimonios'
        ];
    }

    public function ambiente()
    {
        return $this->belongsTo(Ambiente::class, 'id_ambiente', 'id');
    }

    public function historico(){
        //primeiro id da tabela externa, segundo(tabela interna)
        return $this->hasOne(Patrimonio::class, 'id_patrimonio', 'id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id');
    }
}
