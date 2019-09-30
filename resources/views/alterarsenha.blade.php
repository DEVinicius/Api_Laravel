    @extends('layout.site')

    @section('titulo', 'Heritage - Alterar Senha')

    @section('conteudo')

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold">ALTERAR SENHA</h1>
                <h4 class="subtitulo text-center text-uppercase">troque a senha preenchendo o formulário abaixo</h4>
            </div>
        </div>
        <form action="#" method="post" style="margin-top: 5%;">
            <div class="form-row">
                <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="senha" class="subtitulo text-uppercase nowrap">senha atual</label>
                        <input name="senha" type="password" class="form-control inputCadastro">
                    </div>
                <div class="form-group col-md-4"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="senha" class="subtitulo text-uppercase nowrap">nova senha</label>
                        <input name="senha" type="password" class="form-control inputCadastro">
                    </div>
                <div class="form-group col-md-4"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="senha" class="subtitulo text-uppercase nowrap">confirmar nova senha</label>
                        <input name="senha" type="password" class="form-control inputCadastro"><br>
                        <button type="submit" class="btnForm float-right">SALVAR</button>
                    </div>
                <div class="form-group col-md-4"></div>
            </div>
        </form>
    </div>

    @endsection