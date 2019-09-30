<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function contato(Request $req) {

        $req -> validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required|max:180'
        ], [
            'nome.required' => '* campo obrigatório',
            'email.required' => '* campo obrigatório',
            'email.email' => '* Insira um email válido',
            'mensagem.required' => '* campo obrigatório',
            'mensagem.max' => '* número máximo de caracter excedido'
        ]);

        return redirect()-> route('contato');
    }

    public function cadastro(Request $req) {

        $dados = $req->all();
        $dados['id_nivel_usuario'] = 0;

        $req -> validate([
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'emailCad' => 'required|email',
            'senha' => 'required',
            'confirmar_senha' => 'required'
        ], [
            'nome.required' => '* campo obrigatório',
            'cpf.required' => '* campo obrigatório',
            'telefone.required' => '* campo obrigatório',
            'emailCad.required' => '* campo obrigatório',
            'emailCad.email' => '* Insira um email válido',
            'senha.required' => '* campo obrigatório',
            'confirmar_senha.required' => '* campo obrigatório'
        ]);

        if(Usuario::where('cpf' , $dados['cpf'])->orWhere('email', $dados['emailCad'])->count() == 0) {

            if(Usuario::cpf($dados['cpf'])) {

                if($dados['senha'] == $dados['confirmar_senha']) {
                    Usuario::create($dados);
                    return redirect()-> route('index');
                }

            }

        }

        return redirect()-> route('login');

    }

    public function entrar(Request $req) {

        $dados = $req->all();

        $req -> validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.email' => '* Insira um email válido',
            'email.required' => '* campo obrigatório',
            'password.required' => '* campo obrigatório'
        ]);

        if(Usuario::where([['email', '=', $dados['email']],['senha', '=', $dados['password']]])->count() > 0) {

            $user = Usuario::where('email', $dados['email'])->first();

            if($user['imagem'] == null) {
                $user['imagem'] = "";
            }

            session(['nivel_usuario' => $user['id_nivel_usuario']]);
            session(['nome' => $user['nome']]);
            session(['cpf' => $user['cpf']]);
            session(['email' => $user['email']]);
            session(['telefone' => $user['telefone']]);
            session(['foto' => $user['imagem']]);

            return redirect()-> route('index');
        }

        return redirect()-> route('login');

    }

    public function logout() {
        session()->flush();
        return redirect()-> route('index');
    }

    public function perfilFoto(Request $req) {
        return redirect()-> route('perfil');
    }

    public function administradores() {

        $dados = "administradores";
        return view('usuarios', compact('dados'));

    }

    public function gerenciadores() {

        $dados = "gerenciadores";
        return view('usuarios', compact('dados'));

    }

    public function suportes() {

        $dados = "suportes";
        return view('usuarios', compact('dados'));

    }
}
