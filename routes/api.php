<?php

  //Rota da Tabela Ambiente

use App\Providers\RouteServiceProvider;

   Route::post('cadastro', 'AuthController@cadastrar')->name('api.cadastrar');
   Route::post('login', 'AuthController@login')->name('api.login');
   Route::post('logout', 'AuthController@logout');
   Route::post('refresh', 'AuthController@refresh');
   Route::post('me', 'AuthController@me');

  Route::group([
    'namespace' => 'Api',
  ],function(){
      Route::apiResource('ambientes','AmbienteController');
      Route::apiResource('empresas','EmpresaController');
      Route::apiResource('patrimonios','PatrimonioController');
      Route::apiResource('historicos','HistoricoController');
      Route::apiResource('usuarios','UserController');
      Route::apiResource('userarray','UserArrayController');

      Route::get('{id}/ambientes','AmbienteController@select_esp');
      Route::get('{id_empresa}/ambientes/{id}','AmbienteController@select_amb');

      //deletes
      Route::get('ambiente/{id}','AmbienteController@deleteambiente');
      Route::get('patrimonio/{id}','PatrimonioController@deletepatrimonio');
      Route::get('userarray/{id}','UserArrayController@deleteuserarray');
      Route::get('historico/{id}','HistoricoController@deletehistorico');
      Route::get('empresa/{id}','EmpresaController@deleteempresa');

      //updates
      Route::post('ambiente_up/{id}','AmbienteController@updateambiente');
      Route::post('patrimonio_up/{id}','PatrimonioController@updatepatrimonio');
      Route::post('userarray_up/{id}','UserArrayController@updateuserarray');
      Route::post('historico_up/{id}','HistoricoController@updatehistorico');
      Route::post('empresa_up/{id}','EmpresaController@updateempresa');
      

      Route::get('{id_empresa}/patrimonios','PatrimonioController@select_esp');
      Route::get('{id_empresa}/ambientes/{id_ambiente}/patrimonios','PatrimonioController@select_pat_esp');
      Route::get('{id_empresa}/patrimonios/{id_patrimonio}','PatrimonioController@select_pat');

      Route::get('{id_empresa}/usuarios','UserController@select_usr_esp');
      Route::get('{id_empresa}/usuarios/{id_nivel}','UserController@select_usr_nvl');

      //historico
      Route::get('{id_empresa}/historicos','HistoricoController@select_hist_emp');
      Route::get('{id_empresa}/historicos/{id_ambiente}/ambientes','HistoricoController@select_hist_amb');
      Route::get('{id_empresa}/historicos/{id_patrimonio}/patrimonios','HistoricoController@select_hist_pat');
      Route::get('{id_empresa}/historicos/{num_historico}','HistoricoController@select_hist_acao');
  });
?>