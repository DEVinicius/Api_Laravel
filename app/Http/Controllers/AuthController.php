<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','cadastrar']]);
    }

    public function cadastrar(Request $req){
        $dados = $req->all();

        
        if(User::where('cpf', $dados['cpf'])->orWhere('email', $dados['email'])->count() == 0){
            if(User::cpf($dados['cpf']))
            {
                if($dados['password'] == $dados['confirmar_senha'])
                {
                    $dados['password'] = bcrypt($dados['password']);
                    User::create($dados);
                    
                    return redirect()->route('login');
                }
            }
        }
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        User::where('email', $credentials['email'])
        ->update(['remember_token' => $token]);
        //return $this->respondWithToken($token);
        return redirect()->route('index');
    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }


    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
