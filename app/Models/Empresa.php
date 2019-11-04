<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//importando as Models dos arquivos que recebem  o id da empresa
use App\Models\Ambiente;
use App\Models\Historico;
use App\User;

class Empresa extends Model
{
    public $timestamps = false;
    
    protected $fillable = [ 
        'nome_empresa',
        'codigo_empresa',
        'cnpj',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'estado',
        'telefone',
        'email'
    ];

    public function rules()
    {
        return [
            'nome_empresa' => 'required|unique:empresas',
            'cnpj' => 'required|unique:empresas',
            'cep' => 'required',
            'endereco' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'telefone' => 'required|unique:empresas',
            'email' => 'required|unique:empresas'
        ];
    }

    public function ambiente(){
        //primeiro id da tabela externa, segundo(tabela interna)
        return $this->hasMany(Ambiente::class, 'id_empresa', 'id');
    }

    public function historico(){
        //primeiro id da tabela externa, segundo(tabela interna)
        return $this->hasOne(Historico::class, 'id_empresa', 'id');
    }

    public function usuario(){
        return $this->hasMany(User::class, 'id_empresa', 'id');
    }

    public function patrimonio()
    {
        return $this->hasMany(Patrimonio::class, 'id_empresa', 'id');
    }
}
