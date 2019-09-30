    @extends('layout.inicialSite')

    @section('titulo', 'Heritage - Contato')

    @section('conteudo')

    <div class="container" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold text-uppercase"><img src="storage/Geral/IconContato.png" style="margin-top: -30px;" alt="Contato">  Fale conosco</h1>
                <h4 class="subtitulo text-uppercase text-center mt-3">Preencha o formulário, teremos prazer em atender você.</h4><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form action="#" method="post">

                        {{ csrf_field() }}

                        <div class="form-row" style="margin-top: 5%">
                            <div class="form-group col-md-1"></div>
                                <div class="form-group col-md-10">
                                    <label for="nome" class="subtitulo text-uppercase nowrap">NOME</label>
                                    <input name="nome" type="text" class="form-control inputCadastro {{ $errors -> has('nome') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('nome'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('nome') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="form-group col-md-1"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1"></div>
                                <div class="form-group col-md-10">
                                    <label for="email" class="subtitulo text-uppercase nowrap">EMAIL</label>
                                    <input name="email" type="text" class="form-control inputCadastro {{ $errors -> has('email') ? 'is-invalid' : '' }}">
                                    @if($errors -> has('email'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('email') }}
                                        </div>
                                    @endif
                                </div>
                            <div class="form-group col-md-1"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1"></div>
                                <div class="form-group col-md-10">
                                    <label for="mensagem" class="subtitulo text-uppercase nowrap">MENSAGEM</label>
                                    <textarea name="mensagem" class="form-control inputCadastro {{ $errors -> has('mensagem') ? 'is-invalid' : '' }}" rows="3"></textarea>
                                    @if($errors -> has('mensagem'))
                                        <div class="invalid feedback mt-2 text-uppercase bold" style="color: #FF0000; font-size: 12px;">
                                            {{ $errors -> first('mensagem') }}
                                        </div>
                                    @endif
                                    <br><button type="submit" class="btnForm">ENVIAR</button>
                                </div>
                            <div class="form-group col-md-1"></div>
                        </div>
                    </form>
                </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
    @endsection