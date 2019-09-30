	@extends('layout.site')

    @section('titulo', 'Heritage - Historico')

    @section('conteudo')

    <div class="container" style="margin-top: 5%;">     
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold">HISTÓRICO</h1>
            </div>
        </div>
        <div id="hide">
            <div class="row" style="margin-top: 15%; margin-bottom: 15%;">
                <div class="col-md-12">
                    <h4 class="text-center subtitulo">NO MOMENTO SEU HISTÓRICO AINDA ESTÁ VAZIO</h4>
                </div>
            </div>
        </div>
        <div id="">
            <form action="#" method="post" style="margin-top: 5%;">
                <div class="form-row">
                    <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-10">
                            <h3 class="titulo text-uppercase bold">20/08/2019</h3>
                            <h5 class="subtitulo text-uppercase">13:59:35 - Patrimônio 1236547890 movido da sala d21 para d15</h5>
                            <h5 class="subtitulo text-uppercase">16:30:10 - Patrimônio 1236547891 saiu para manutenção</h5>
                        </div>
                    <div class="form-group col-md-1"></div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-1"></div>
                        <div class="form-group col-md-10">
                            <h3 class="titulo text-uppercase bold">23/08/2019</h3>
                            <h5 class="subtitulo text-uppercase">14:12:55 - Patrimônio 1236547890 movido da sala d15 para d21</h5>
                            <h5 class="subtitulo text-uppercase">16:30:10 - Patrimônio 1236547891 voltou da manutenção</h5>
                        </div>
                    <div class="form-group col-md-1"></div>
                </div>
            </form>
        </div>
    </div>
           
    @endsection