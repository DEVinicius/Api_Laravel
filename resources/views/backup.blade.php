    @extends('layout.site')

    @section('titulo', 'Heritage - Backup')

    @section('conteudo')

    @if($dados == "Verificar")

    @elseif($dados == "Delimitar")
    
    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold">DATA PARA BACKUP</h1>
                <h4 class="subtitulo text-center text-uppercase">sempre tenha um backup para caso aconteça algum imprevisto</h4>
            </div>
        </div>
        <form action="#" method="post" autocomplete="off" style="margin-top: 5%;">
            <div class="form-row">
                <div class="form-group col-md-3"></div>
                    <div class="form-group col-md-6 text-center">
                        <h5 class="subtitulo text-uppercase">Insira a data para o backup ser realizado</h5>
                        <center><input name="data" id="calendario" type="text" class="form-control inputCadastro" style="width: 250px;"></center>
                        <button type="submit" class="btnForm" style="margin-top: 16px;">ENVIAR</button>
                    </div>
                <div class="form-group col-md-3"></div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-4">
                    </div>
                <div class="form-group col-md-4"></div>
            </div>
        </form>
    </div>
    @endif

    @endsection

    @section('calendario')
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
            $("#calendario").datepicker({
                dateFormat: 'dd/mm/yy',
                showOtherMonths: true,
                selectOtherMonths: true,
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
            });
        });
        </script>
    @endsection
