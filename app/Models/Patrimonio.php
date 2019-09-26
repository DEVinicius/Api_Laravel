<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ambiente;
use App\Models\Historico;

class Patrimonio extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'nome_patrimonio',
        'descricao',
        'id_ambiente',
        'codigo_patrimonio',
    ];

    public function rules()
    {
        return [
            'nome_patrimonio' => 'required',
            'descricao' => 'required',
            'id_ambiente' => 'required',
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
}
