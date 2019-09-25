<?php

  //Rota da Tabela Ambiente
  Route::apiResource('ambientes','Api\AmbienteController');
  Route::apiResource('empresas','Api\EmpresaController');
  Route::apiResource('setores','Api\SetorController');
  Route::apiResource('patrimonios','Api\PatrimonioController');
  Route::apiResource('historicos','Api\HistoricoController');

?>