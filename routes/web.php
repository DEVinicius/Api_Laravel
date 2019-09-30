<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'namespace' => 'Web'
],function(){

    
    Route::get('/', function () {
        return view('index');
    })->name('index');
    
    Route::get('/contato', function () {
        return view('contato');
    })->name('contato');
    
    Route::post('/contato', 'UsuarioController@contato') -> name('contato');
    
    Route::get('/planos', function () {
        return view('planos');
    })->name('planos');
    
    Route::get('/sobre', function () {
        return view('sobre');
    })->name('sobre');
    
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::get('/login/logout','UsuarioController@logout') -> name('logout');
    
    Route::post('/login/entrar','UsuarioController@entrar') -> name('entrar');
    
    Route::post('/login','UsuarioController@cadastro') -> name('cadastrar');
    
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    
    Route::get('/perfil', function () {
        return view('perfil');
    })->name('perfil');
    
    Route::post('/perfilFoto','UsuarioController@perfilFoto') -> name('perfilFoto');
    
    Route::get('/empresa', function () {
        return view('empresa');
    })->name('empresa');
    
    Route::post('/empresa','EmpresaController@empresa') -> name('empresa');
    
    Route::get('/comousar', function () {
        return view('comoUsar');
    })->name('comoUsar');
    
    Route::get('/historico', function () {
        return view('historico');
    })->name('historico');
    
    Route::get('/ambientes', function () {
        return view('ambientes');
    })->name('ambientes');
    
    Route::get('/patrimonios','PatrimonioController@patrimonioEmpresa') -> name('patrimonioEmpresa');
    
    Route::get('/patrimonio','PatrimonioController@patrimonioAmbiente') -> name('patrimonioAmbiente');
    
    Route::get('/administradores','UsuarioController@administradores') -> name('administradores');
    
    Route::get('/gerenciadores','UsuarioController@gerenciadores') -> name('gerenciadores');
    
    Route::get('/suportes','UsuarioController@suportes') -> name('suportes');
    
    Route::get('/alterarsenha', function () {
        return view('alterarsenha');
})->name('alterarsenha');

Route::get('/verificaBackup','BackupController@verificaBackup') -> name('verificaBackup');

Route::get('/dataBackup','BackupController@dataBackup') -> name('dataBackup');

});