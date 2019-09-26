<?php

  //Rota da Tabela Ambiente

use App\Providers\RouteServiceProvider;

  Route::apiResource('ambientes','Api\AmbienteController');
  Route::apiResource('empresas','Api\EmpresaController');
  Route::apiResource('setores','Api\SetorController');
  Route::apiResource('patrimonios','Api\PatrimonioController');
  Route::apiResource('historicos','Api\HistoricoController');
  Route::apiResource('usuario','Api\HistoricoController');

  Route::post('login', 'AuthController@login');
  Route::post('logout', 'AuthController@logout');
  Route::post('refresh', 'AuthController@refresh');
  Route::post('me', 'AuthController@me');
  
  Route::post('',);
?>