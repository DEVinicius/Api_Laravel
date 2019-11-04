<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'email',
        'texto'
    ];

    public function rules(){
        return [
            'nome' => 'required',
            'email' => 'required',
            'texto' => 'required'
        ];
    }
}
