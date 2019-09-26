<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class NivelUsuario extends Model
{
    public function usuario(){
        return $this->hasOne(User::class, 'id_nivel_usuario', 'id');
    }
}
