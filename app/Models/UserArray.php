<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Ambiente;

class UserArray extends Model
{
    public $timestamps = false;

     protected $fillable = [
         'user_id',
         'ambiente_id'
     ];

     public function rules()
     {
         return [
             'user_id' => 'required',
             'ambiente_id' => 'required'
         ];
     }


}
