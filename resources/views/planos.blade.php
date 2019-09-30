    @extends('layout.inicialSite')

    @section('titulo', 'Heritage - Planos')

    @section('conteudo')

    <div class="container" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center titulo bold"><img src="storage/Planos/IconPlanos.png" class="img-fluid" style="margin-top: -18px;">PLANOS</h1>
                <h4 class="subtitulo text-center text-uppercase mt-3">adquira já e tenha a organização e praticidade que sua empresa merece</h4>
            </div>
        </div>
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-3 d-flex flex-column align-items-center" style="border-right: 1px solid #c0c0c0">
                <h2 class="text-center titulo bold pt-4">MENSAL</h2>
                <img src="storage/Planos/PlanoMensal.png" class="img-fluid mt-4">
                <button type="submit" class="btnForm mt-5">COMPRAR</button>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center" style="border-right: 1px solid #c0c0c0">
                <h2 class="text-center titulo bold pt-4">TRIMESTRAL</h2>
                <img src="storage/Planos/PlanoTrimestral.png" class="img-fluid mt-4">
                <button type="submit" class="btnForm mt-5">COMPRAR</button>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center" style="border-right: 1px solid #c0c0c0">
                <h2 class="text-center titulo bold pt-4">SEMESTRAL</h2>
                <img src="storage/Planos/PlanoSemestral.png" class="img-fluid mt-4">
                <button type="submit" class="btnForm mt-5">COMPRAR</button>
            </div>
            <div class="col-md-3 d-flex flex-column align-items-center">
                <h2 class="text-center titulo bold pt-4">ANUAL</h2>
                <img src="storage/Planos/PlanoAnual.png" class="img-fluid mt-4">
                <button type="submit" class="btnForm mt-5">COMPRAR</button>
            </div>
        </div>
    </div>

    @endsection