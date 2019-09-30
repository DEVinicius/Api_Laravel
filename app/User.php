<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use App\Models\Empresa;
use App\Models\NivelUsuario;
use App\Models\UserArray;

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
        'cpf',
        'id_empresa',
        'id_nivel_user',
        'telefone',
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

    public function user_array(){
        return $this->hasMany(UserArray::class, 'id_user', 'id');
    }

    public static function cpf($cpf){
        
        $nums = array(10, 9, 8, 7, 6, 5, 4, 3, 2);
        $i = 0;
        $n1 = 0;
        $n2 = 0;
        $soma = 0;

        if(strlen($cpf) != 11){
            return false;
        }
        else if  ($cpf == '00000000000' || $cpf == '11111111111' || 
        $cpf == '22222222222' || $cpf == '33333333333' || 
        $cpf == '44444444444' || $cpf == '55555555555' || 
        $cpf == '66666666666' || $cpf == '77777777777' || 
        $cpf == '88888888888' || $cpf == '99999999999'){
            return false;
        }

        for($i = 0; $i < 11; $i++){
            $cpfint[] = (int) $cpf[$i];
        }

        $i = 0;

        for($i = 0; $i < 9; $i++){
            $soma += $cpfint[$i] * $nums[$i];
        }

        $resto = $soma % 11;
        number_format($resto, 0);

        if($resto < 2){
            $n1 = 0;
        }
        else{
            $n1 = 11 - $resto;
        }

        $soma = 0;

        $nums = array(11, 10, 9, 8, 7, 6, 5, 4, 3, 2);

        $i = 0;

        for($i = 0; $i < 10; $i++){
            $soma += $cpfint[$i] * $nums[$i];
        }

        $resto = $soma % 11;
        number_format($resto, 0);

        if($resto < 2){
            $n2 = 0;
        }
        else{
            $n2 = 11 - $resto;
        }

        if($cpfint[9] == $n1 && $cpfint[10] == $n2){
        }
        else{
            return false;
        }

        return true;
    }
}
