    @extends('layout.site')

    @section('titulo', 'Heritage - Perfil')

    @section('conteudo')
    
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold"><img src="storage/Geral/Perfil.png" class="img-fluid" style="margin-top: -10px;"> INFORMAÇÕES DO PERFIL</h1>
            </div>
        </div>
            <div class="row" style="margin-top: 5%;">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    @if(session('foto') == null)
                        <input type="file" id="upload_file" name="arquivo" accept="image/*"/>
                        <label id="upload_btn" for="upload_file" class="img-box float-left">
                            <img class="img-default img-fluid" src="storage/Fotos/User.png">
                            <img class="img-hover img-fluid" src="storage/Fotos/UserPerfilHover.png">
                        </label>
                    @else
                        <label id="openButtons" class="img-box float-left">
                            <img class="img-fluid fotoPerfil" src="storage/Fotos/{{session('foto')}}">
                            <img class="img-fluid alterarImg" src="storage/Fotos/AlterarFotoHover.png">
                        </label>
                    @endif
                    <h4 class="titulo text-uppercase mt-3" style="margin-left: 140px;">{{session('nome')}}</h4>
                    @if(session('nivel_usuario') == 1)
                        <h5 class='subtitulo text-uppercase nowrap' style='margin-left: 140px;'>ADMINISTRADOR</h5>
                    @elseif(session('nivel_usuario') == 2)
                        <h5 class='subtitulo text-uppercase nowrap' style='margin-left: 140px;'>Gerenciador</h5>
                    @else
                        <h5 class='subtitulo text-uppercase nowrap' style='margin-left: 140px;'></h5>
                    @endif
                </div>
            </div>
            <div class="row d-none mt-4" id="buttonsImg">
                <div class="col-md-3"></div>
                    <div class="col-md-6 text-center">
                        <input type="file" id="upload_file" name="arquivo" accept="image/*"/>
                        <label id="upload_btn" for="upload_file" style="margin-top: 5%; margin-bottom: 5%;">
                            <a class="btnPerfil">ALTERAR FOTO</a>
                        </label>
                        <label style="margin-top: 5%; margin-bottom: 5%;">
                            <a href="../Controller/upload.php?acao=deletar" class="btnPerfil">DELETAR FOTO</a>
                        </label>
                        <label style="margin-top: 5%; margin-bottom: 5%;">
                            <a href="#" id="cancel" class="btnPerfil">CANCELAR</a>
                        </label>
                    </div>
                <div class="col-md-3"></div>
            </div>
            <form method="POST" action="#" autocomplete="off" class="mt-4">
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-2">
                        <label for="CPF" class="subtitulo text-uppercase nowrap">CPF</label>
                        <input name="CPF" type="text" class="form-control inputCadastro" value="{{session('cpf')}}" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="empresa" class="subtitulo text-uppercase nowrap">Empresa</label>
                        <input name="empresa" type="text" class="form-control inputCadastro" value="CloudState">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-6">
                        <label for="email" class="subtitulo text-uppercase nowrap">Email</label>
                        <input name="email" type="email" class="form-control inputCadastro" value="{{session('email')}}">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-3">
                        <label for="senha" class="subtitulo text-uppercase nowrap">Senha</label>
                        <div class="inputCadastro" style="height: 36px;">
                            <input name="senha" type="password" class="form-control inputCadastro bg-transparent border-0" value="123456789">
                            <div id="show">
                                <a href="{{route('alterarsenha')}}"><img src="storage/Geral/ModificarSenhaLight.png" class="img-fluid float-right mr-1" style="width: 20px; height: 20px; margin-top: -30px;" alt="Alterar senha"></a>
                            </div>
                            <div id="hideImg">
                                <a href="{{route('alterarsenha')}}"><img src="storage/Geral/ModificarSenhaDark.png" class="img-fluid float-right mr-1" style="width: 20px; height: 20px; margin-top: -30px;" alt="Alterar senha"></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefone" class="subtitulo text-uppercase nowrap">Telefone</label>
                        <input name="telefone" type="text" class="form-control inputCadastro" value="{{session('telefone')}}">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <button type="submit" class="btnForm float-right">SALVAR</button>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

    <!-- Modals -->
    <div class="modal" id="uploadimageModal" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center titulo bold" id="myModalLabel">REDIMENSIONAR IMAGEM</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="close">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin-top: 5%;">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 text-center">
                            <div id="image_demo"></div>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="crop_image btnModal float-right">SALVAR</button>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('perfilHeader')
        <script>
            $(document).ready(function(){
                $("#openButtons").click(function(){
                    $("#buttonsImg").slideDown();
                });

                $("#cancel").click(function(){
                    $("#buttonsImg").slideUp();
                });
            });
        </script>
    @endsection

    @section('perfilFooter')
        <script src="js/croppie.js"></script>
        <script src="js/Imagem.js"></script>
    @endsection
