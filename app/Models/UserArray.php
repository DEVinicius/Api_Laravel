<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Ambiente;

class UserArray extends Model
{
    public $timestamps = false;

     protected $fillable = [
         'id_user',
         'id_ambiente'
     ];

     public function rules()
     {
         return [
             'id_user' => 'required',
             'id_ambiente' => 'required'
         ];
     }


}
