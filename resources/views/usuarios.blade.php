    @extends('layout.site')

    @section('titulo', 'Heritage - Usuários')

    @section('conteudo')

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-1"></div>
                <div class="col-md-10">
                    <h1 class="text-center titulo bold text-uppercase">{{$dados}}</h1>
                    <h4 class="subtitulo text-center text-uppercase">VEJA AS INFORMAÇÕES DOS USUÁRIOS E MUDE SEU NIVEL DE PERMISSÃO</h4>
                </div>
            <div class="col-md-1">
                <a href="#" data-toggle="modal" data-target="#AddUser" class="float-right" style="margin-top: 60px;"><img src="storage/Geral/Add.png" class="img-fluid"></a>
            </div>
        </div>
        <div class="row" style="margin-top: 5%;">
            @for($i = 0; $i < 2; $i++)
                <div class="col-md-6 borda">
                    <div class="dropdown">
                        <div class="dropdown"><img src="storage/Geral/Pontinhos.png" class="imgPontos"></div>
                        <div class="dropdown-content dropleftUser">
                            <a href="#" data-toggle="modal" data-target="#Perfil">VER PERFIL</a>
                            @if(session('nivel_usuario') == 1)
                            <a href="#">EXCLUIR USUÁRIO</a>
                            <a href="#" data-toggle="modal" data-target="#NivelUser">ALTERAR NIVEL DE USUÁRIO</a>
                            @endif
                        </div>
                    </div>
                    <img src="storage/Geral/User.png" class="mt-3 mb-3 float-left">
                    <h4 class="titulo mt-4" style="margin-left: 125px;">PEDRO HENRIQUE VIGNOTTO DA CUNHA</h4>
                    <h5 class="subtitulo text-uppercase nowrap" style="margin-left: 125px;">47873672859</h5>
                </div>
            @endfor
        </div>
    </div>

    <!-- Modals -->
    <div class="modal fade" id="NivelUser" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ALTERAR NIVEL DO USUÁRIO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div>
                            <label class="subtitulo text-uppercase nowrap"><input type="radio" class="option-input radio" name="users" checked /> ADMINISTRADORES</label><br>
                            <label class="subtitulo text-uppercase nowrap"><input type="radio" class="option-input radio" name="users" /> GERENCIADORES</label><br>
                            <label class="subtitulo text-uppercase nowrap"><input type="radio" class="option-input radio" name="users" /> SUPORTES</label><br>
                        </div>
                    </div>
                    <div class="modal-footer mt-2">
                        <button type="submit" class="btnModal float-right">SALVAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="Perfil" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">INFORMAÇÕES DO PERFIL</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="col-md-3 text-center">
                                <img src="storage/Geral/User.png" class="img-fluid mt-1 ml-2">
                            </div>
                            <div class="col-md-9">
                                <h4 class="titulo ml-4 mt-1">PEDRO HENRIQUE VIGNOTTO DA CUNHA</h4>
                                <h5 class="subtitulo text-uppercase nowrap ml-4" >ADMINISTRADOR</h5>
                            </div>
                        </div>
                        <div class="form-row" style="margin-top: 5%;">
                            <div class="form-group col-md-4">
                                <label for="CPF" class="subtitulo text-uppercase nowrap">CPF</label>
                                <input name="CPF" type="text" class="form-control inputCadastro" value="47873672859" readonly>
                            </div>
                            <div class="col-md-8">
                                <label for="empresa" class="subtitulo text-uppercase nowrap">Empresa</label>
                                <input name="empresa" type="text" class="form-control inputCadastro" value="CloudState" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email" class="subtitulo text-uppercase nowrap">Email</label>
                                <input name="email" type="email" class="form-control inputCadastro" value="pedro.vignotto@hotmail.com" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email" class="subtitulo text-uppercase nowrap">Telefone</label>
                                <input name="email" type="email" class="form-control inputCadastro" value="987415632" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">ADICIONAR USUÁRIO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <form method="post" action="#">
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="CPF" class="subtitulo text-uppercase nowrap">CPF</label>
                                <input name="CPF" type="text" class="form-control inputCadastro">
                            </div>
                            <div class="col-md-8">
                                <label for="cargo" class="subtitulo text-uppercase nowrap">Cargo</label>
                                <select name="cargo" class="form-control inputCadastro">
                                    <option>ADMINISTRADOR</option>
                                    <option>GERENCIADOR</option>
                                    <option>SUPORTE</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email" class="subtitulo text-uppercase nowrap">Email</label>
                                <input name="email" type="email" class="form-control inputCadastro">
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
