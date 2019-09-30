    @extends('layout.site')

    @section('titulo', 'Heritage - Empresa')

    @section('conteudo')

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold"><img src="storage/Geral/Empresa.png" class="img-fluid" style="margin-top: -10px;"> INFORMAÇÕES DA EMPRESA</h1>
            </div>
        </div>
        <form method="POST" action="#" style="margin-top: 5%;">
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-3">
                        <label for="cnpj" class="subtitulo text-uppercase nowrap">CNPJ</label>
                        <input name="cnpj" type="text" class="form-control inputCadastro" value="01736486000193" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="CodEmpresa" class="subtitulo text-uppercase nowrap">Código da empresa</label>
                        <input name="CodEmpresa" type="text" class="form-control inputCadastro" value="QWKL7BV8KP" readonly>
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-2">
                        <label for="cnpj" class="subtitulo text-uppercase nowrap">Código Administrador</label>
                        <input name="cnpj" type="text" class="form-control inputCadastro" value="PLKNVB52AS">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CodEmpresa" class="subtitulo text-uppercase nowrap">Código Gerenciador</label>
                        <input name="CodEmpresa" type="text" class="form-control inputCadastro" value="ZA4FG7BN3U">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="CodEmpresa" class="subtitulo text-uppercase nowrap">Código Suporte</label>
                        <input name="CodEmpresa" type="text" class="form-control inputCadastro" value="Y7RH5J3NUW">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-6">
                        <label for="empresa" class="subtitulo text-uppercase nowrap">Nome</label>
                        <input name="empresa" type="text" class="form-control inputCadastro" value="CloudState">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-6">
                        <label for="email" class="subtitulo text-uppercase nowrap">Email</label>
                        <input name="email" type="email" class="form-control inputCadastro" value="pedro.vignotto@hotmail.com">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-3">
                        <label for="telefone" class="subtitulo text-uppercase nowrap">Telefone</label>
                        <input name="telefone" type="text" class="form-control inputCadastro" value="12349875">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cep" class="subtitulo text-uppercase nowrap">CEP</label>
                        <input name="cep" type="text" class="form-control inputCadastro" value="04752-901">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-4">
                        <label for="endereco" class="subtitulo text-uppercase nowrap">Endereço</label>
                        <input name="endereco" type="text" class="form-control inputCadastro" value="Rua amador bueno">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="estado" class="subtitulo text-uppercase nowrap">Estado</label>
                        <input name="estado" type="text" class="form-control inputCadastro" value="São Paulo">
                    </div>
                <div class="col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="col-md-3"></div>
                    <div class="form-group col-md-3">
                        <label for="bairro" class="subtitulo text-uppercase nowrap">Bairro</label>
                        <input name="bairro" type="text" class="form-control inputCadastro" value="Santo Amaro">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cidade" class="subtitulo text-uppercase nowrap">Cidade</label>
                        <input name="cidade" type="text" class="form-control inputCadastro" value="São Paulo"><br>
                        <button type="submit" class="btnForm float-right">SALVAR</button>
                    </div>
                <div class="col-md-3"></div>
            </div>
        </form>
    </div>

    @endsection