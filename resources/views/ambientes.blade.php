    @extends('layout.site')

    @section('titulo', 'Heritage - Ambientes')

    @section('conteudo')

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold">AMBIENTES</h1>
                <h4 class="subtitulo text-center text-uppercase">GERENCIAMENTO DE AMBIENTES</h4><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="nowrap">
                    @if(session('nivel_usuario') == 1)
                        <a href="#" data-toggle="modal" data-target="#AddAmbiente" class="float-right mt-2"><img src="storage/Geral/Add.png" class="img-fluid"></a>
                    @endif
                    <input id="searchBar" class="searchbar" type="text" placeholder="PESQUISAR">
                    <a id="btnSearch" class="btn-search"><img src="storage/Geral/SearchBarIcon.png" class="img-fluid mt-2"></a>
                </div>
            </div>
        </div>
        <div id="hide">
            <div class="row" style="margin-top: 15%; margin-bottom: 15%;">
                <div class="col-md-12">
                    <h4 class="text-center subtitulo">NENHUM AMBIENTE CADASTRADO NO MOMENTO</h4>
                </div>
            </div>
        </div>
        <div id="">
            <div class="row" style="margin-top: 5%;">
                @for($i = 0; $i < 10; $i++)
                    <div class="col-md-4 borda">
                        <div class="dropdown">
                            <div class="dropdown"><img src="storage/Geral/Pontinhos.png" class="imgPontos"></div>
                            <div class="dropdown-content dropleft">
                                <a href="{{route('patrimonioAmbiente')}}">ABRIR AMBIENTE</a>
                                @if(session('nivel_usuario') == 1)
                                <a href="#" data-toggle="modal" data-target="#EditarInfAmb">EDITAR INFORMAÇÕES</a>
                                <a href="#" data-toggle="modal" data-target="#AddGerenciador">ADICIONAR GERENCIADOR</a>
                                <a href="#">EXCLUIR AMBIENTE</a>
                                @elseif(session('nivel_usuario') == 2)
                                <a href="#" data-toggle="modal" data-target="#ExibirAmb">EXIBIR INFORMAÇÕES</a>
                                @endif

                            </div>
                        </div>
                        <a href="patrimonios.php?acao=patrimonioAmbiente" style="text-decoration: none;"><h4 class="titulo ml-4 mt-3">SALA D21</h4></a>
                        <h5 class="subtitulo text-uppercase nowrap ml-4 mb-3">pedro</h5>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="EditarInfAmb" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">EDITAR INFORMAÇÕES</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro" value="SALA D21">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">SETOR</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="INFORMATICA">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">GERENCIADOR</label>
                                <input name="nome" type="text" class="form-control inputCadastro" value="PEDRO">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btnModal float-right">SALVAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ExibirAmb" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">INFORMAÇÕES DO AMBIENTE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro" value="SALA D21" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">SETOR</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="INFORMATICA" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">GERENCIADOR</label>
                                <input name="nome" type="text" class="form-control inputCadastro" value="PEDRO" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AddAmbiente" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ADICIONAR AMBIENTE</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">SETOR</label>
                                <input name="empresa" type="text" class="form-control inputCadastro">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">GERENCIADOR</label>
                                <input name="nome" type="text" class="form-control inputCadastro">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btnModal float-right">ADICIONAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AddGerenciador" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ADICIONAR NOVO GERENCIADOR</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-8">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">QUANTOS GERENCIADORES DESEJA ADICIONAR?</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro">
                                <button type="submit" class="btnModal mt-4" style="margin-left: 25%;">ADICIONAR</button>
                            </div>
                            <div class="form-group col-md-2"></div>
                        </div>
                        <div id="hide">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nome" class="subtitulo text-uppercase nowrap">GERENCIADOR</label>
                                    <input name="nome" type="text" class="form-control inputCadastro">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="hide">
                        <div class="modal-footer">
                            <button type="submit" class="btnModal float-right">ADICIONAR</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection
