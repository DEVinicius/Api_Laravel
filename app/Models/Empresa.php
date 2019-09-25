<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//importando as Models dos arquivos que recebem  o id da empresa
use App\Models\Setor;
use App\Models\Historico;

class Empresa extends Model
{
    protected $fillable = [ 
        'nome_empresa',
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

    public function setor(){
        //primeiro id da tabela externa, segundo(tabela interna)
        return $this->hasMany(Setor::class, 'id_empresa', 'id');
    }

    public function historico(){
        //primeiro id da tabela externa, segundo(tabela interna)
        return $this->hasOne(Historico::class, 'id_empresa', 'id');
    }
}
