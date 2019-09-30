    @extends('layout.site')

    @section('titulo', 'Heritage - Patrimônios')


    @section('conteudo')
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold">PATRIMÔNIOS</h1>
                <h4 class="subtitulo text-center text-uppercase">GERENCIAMENTO DE PATRIMÔNIO</h4><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="nowrap">
                    @if(session('nivel_usuario') == 1)
                        <a href="#" data-toggle="modal" data-target="#AddPatrimonio" class="float-right mt-2"><img src="storage/Geral/Add.png" class="img-fluid"></a>
                    @endif
                    <input id="searchBar" class="searchbar" type="text" placeholder="PESQUISAR">
                    <a id="btnSearch" class="btn-search"><img src="storage/Geral/SearchBarIcon.png" class="img-fluid mt-2"></a>
                </div>
            </div>
        </div>
        <div id="hide">
            <div class="row" style="margin-top: 15%; margin-bottom: 15%;">
                <div class="col-md-12">
                    <h4 class="text-center subtitulo">NENHUM PATRIMÔNIO CADASTRADO NO MOMENTO</h4>
                </div>
            </div>
        </div>
        <div id="">
            <div class="row" style="margin-top: 5%;">
                @for($i = 0; $i < 3; $i++)
                    <div class="col-md-4 borda">
                        <div class="dropdown">
                            <div class="dropdown"><img src="storage/Geral/Pontinhos.png" class="imgPontos"></div>
                            <div class="dropdown-content dropleft">
                                <a href="#" data-toggle="modal" data-target="#AbrirChamado">ABRIR CHAMADO</a>
                                @if(session('nivel_usuario') == 1)
                                    <a href="#" data-toggle="modal" data-target="#EditarInfPatri">EDITAR INFORMAÇÕES</a>
                                    <a href="#">EXCLUIR PATRIMÔNIO</a>
                                @elseif(session('nivel_usuario') == 2)
                                    <a href="#" data-toggle="modal" data-target="#ExibirPatri">EXIBIR INFORMAÇÕES</a>
                                @endif
                            </div>
                        </div>
                        <h4 class="titulo ml-4 mt-3">12345678910</h4>
                        @if($dados == "Empresa")
                        <h5 class="subtitulo text-uppercase nowrap ml-4 mb-3">SALA D21</h5>
                        @elseif($dados == "Ambiente")
                        <h5 class="subtitulo text-uppercase nowrap ml-4 mb-3">COMPUTADOR</h5>
                        @endif
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="EditarInfPatri" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
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
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NÚMERO DO PATRIMÔNIO</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro" value="12345678910" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">LOCAL</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="SALA D21">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="nome" type="text" class="form-control inputCadastro" value="Computador">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao" class="subtitulo text-uppercase nowrap">DESCRIÇÃO</label>
                                <textarea name="descricao" class="form-control inputCadastro" rows="2">i7 16GB RAM Windows 10</textarea>
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

    <div class="modal fade" id="ExibirPatri" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">INFORMAÇÕES DO PATRIMÔNIO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NÚMERO DO PATRIMÔNIO</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro" value="12345678910" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">LOCAL</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="SALA D21" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="nome" type="text" class="form-control inputCadastro" value="Computador" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao" class="subtitulo text-uppercase nowrap">DESCRIÇÃO</label>
                                <textarea name="descricao" class="form-control inputCadastro" rows="2" readonly>i7 16GB RAM Windows 10</textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AbrirChamado" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ABRIR CHAMADO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NÚMERO DO PATRIMÔNIO</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro" value="12345678910" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">LOCAL</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="SALA D21" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="nome" type="text" class="form-control inputCadastro" value="Computador" readonly>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao" class="subtitulo text-uppercase nowrap">DESCRIÇÃO</label>
                                <textarea name="descricao" class="form-control inputCadastro" rows="2" readonly>i7 16GB RAM Windows 10</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao" class="subtitulo text-uppercase nowrap">DESCRIÇÃO DO PROBLEMA</label>
                                <textarea name="descricao" class="form-control inputCadastro" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btnModal float-right">ABRIR CHAMADO</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AddPatrimonio" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ADICIONAR PATRIMÔNIO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NÚMERO DO PATRIMÔNIO</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">LOCAL</label>
                                <input name="empresa" type="text" class="form-control inputCadastro">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="nome" type="text" class="form-control inputCadastro">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao" class="subtitulo text-uppercase nowrap">DESCRIÇÃO</label>
                                <textarea name="descricao" class="form-control inputCadastro" rows="2"></textarea>
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

    <div class="modal fade" id="AddPatrimonioAmbiente" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ADICIONAR PATRIMÔNIO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NumPatri" class="subtitulo text-uppercase nowrap">NÚMERO DO PATRIMÔNIO</label>
                                <input name="NumPatri" type="text" class="form-control inputCadastro">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">LOCAL</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="SALA D21" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome" class="subtitulo text-uppercase nowrap">NOME</label>
                                <input name="nome" type="text" class="form-control inputCadastro">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao" class="subtitulo text-uppercase nowrap">DESCRIÇÃO</label>
                                <textarea name="descricao" class="form-control inputCadastro" rows="2"></textarea>
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

    @endsection
