<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Empresa;
use App\Models\Patrimonio;
use App\Models\Ambiente;

class Historico extends Model
{
    protected $fillable = [
        'nome_historico',
        'id_patrimonio',
        'id_empresa',
        'local_origem',
        'local_destino'
    ];

    public function rules()
    {
        return [
            'nome_historico' => 'required',
            'id_patrimonio' => 'required',
            'id_empresa' => 'required',
            'local_origem' => 'required'
        ];
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id');
    }

    public function patrimonio(){
        return $this->belongsTo(Patrimonio::class, 'id_patrimonio', 'id');
    }

    public function ambiente(){
        return $this->belongsTo(Ambiente::class, 'id_ambiente', 'id');
    }
}
