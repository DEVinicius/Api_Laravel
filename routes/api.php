<?php

  //Rota da Tabela Ambiente

use App\Providers\RouteServiceProvider;

  Route::post('cadastro', 'AuthController@cadastrar');
  Route::post('login', 'AuthController@login');
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::post('me', 'AuthController@me');

  Route::group([
    'namespace' => 'Api',
    'middleware' => 'auth:api'
  ],function(){
      Route::apiResource('ambientes','AmbienteController');
      Route::apiResource('empresas','EmpresaController');
      Route::apiResource('setores','SetorController');
      Route::apiResource('patrimonios','PatrimonioController');
      Route::apiResource('historicos','HistoricoController');
      Route::apiResource('usuario','HistoricoController');
  });
?>