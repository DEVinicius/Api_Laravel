    @extends('layout.inicialSite')

    @section('titulo', 'Heritage - Login | Cadastro')

    @section('conteudo')

    <div class="container-fluid" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-4">
                    <form action="{{route('api.login')}}" method="post">

                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <h2 class="titulo bold">LOGIN</h2>
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="email" class="subtitulo text-uppercase nowrap">EMAIL</label>
                                    <input name="email" type="text" class="form-control inputCadastro {{ $errors -> has('email') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('email'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('email') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="password" class="subtitulo text-uppercase nowrap">SENHA</label>
                                    <input name="password" type="password" class="form-control inputCadastro {{ $errors -> has('password') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('password'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('password') }}
                                        </div>
                                    @endif
                                    <br><a href="#">ESQUECI MINHA SENHA</a><br>
                                    <button type="submit" class="btnForm mt-3">ENTRAR</button>
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 separar">
                    <form action="{{route('api.cadastrar')}}" method="post">

                        {{ csrf_field() }}
                        
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <h2 class="titulo bold">CADASTRAR-SE</h2>
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="name" class="subtitulo text-uppercase nowrap">NOME COMPLETO</label>
                                    <input name="name" type="text" class="form-control inputCadastro {{ $errors -> has('name') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('name'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('name') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-4">
                                    <label for="cpf" class="subtitulo text-uppercase nowrap">CPF</label>
                                    <input name="cpf" type="text" class="form-control inputCadastro {{ $errors -> has('cpf') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('cpf'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('cpf') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="telefone" class="subtitulo text-uppercase nowrap">TELEFONE</label>
                                    <input name="telefone" type="text" class="form-control inputCadastro {{ $errors -> has('telefone') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('telefone'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('telefone') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="email" class="subtitulo text-uppercase nowrap">EMAIL</label>
                                    <input name="email" type="text" class="form-control inputCadastro {{ $errors -> has('email') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('email'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('email') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="password" class="subtitulo text-uppercase nowrap">SENHA</label>
                                    <input name="password" type="password" class="form-control inputCadastro {{ $errors -> has('password') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('password'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('password') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2"></div>
                                <div class="form-group col-md-8">
                                    <label for="confirmar_senha" class="subtitulo text-uppercase nowrap">CONFIRMAR SENHA</label>
                                    <input name="confirmar_senha" type="password" class="form-control inputCadastro {{ $errors -> has('confirmar_senha') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('confirmar_senha'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('confirmar_senha') }}
                                        </div>
                                    @endif
                                    <br><button type="submit" class="btnForm">CADASTRAR</button>
                                </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
                </div>
            <div class="col-md-2"></div>
        </div>
    </div>

    @endsection