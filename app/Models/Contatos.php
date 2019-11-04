<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'texto'
    ];

    public function rules(){
        return [
            'texto' => 'required'
        ];
    }
}
