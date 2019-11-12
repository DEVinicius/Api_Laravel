<?php

namespace App;

use App\Models\Ambiente;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\Empresa;
use App\Models\NivelUsuario;

class User extends Authenticatable implements JWTSubject
{
    public $timestamps = false;
    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'id_empresa',
        'id_nivel_usuario',
        'imagem'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'id_empresa', 'id');
    }

    public function nivelusuario()
    {
        return $this->belongsTo(NivelUsuario::class, 'id_nivel_usuario', 'id');
    }

    public function ambiente(){
        //primeiro id da tabela externa, segundo(tabela interna)
        return $this->hasMany(Ambiente::class, 'id_usuario', 'id');
    }


}