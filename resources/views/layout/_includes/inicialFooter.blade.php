    <div class="container" style="margin-top: 5%">
        <hr style="height: 1px; background-color: #C0C0C0;">
    </div>
    <footer class="page-footer font-small unique-color-dark mt-4 bg-transparent">
        <div class="container text-center text-md-left mt-2">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="storage/MenuFooter/LogoMenu.png" class="img-fluid mt-5" alt="Logo">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold footer-line">PLANOS</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('planos')}}" id="meulink">MENSAL</a><br>
                    <a href="{{route('planos')}}" id="meulink">TRIMESTRAL</a><br>
                    <a href="{{route('planos')}}" id="meulink">SEMESTRAL</a><br>
                    <a href="{{route('planos')}}" id="meulink">ANUAL</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold footer-line">MAPA DO SITE</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('index')}}" id="meulink">HOME</a><br>
                    <a href="{{route('planos')}}" id="meulink">PLANOS</a><br>
                    <a href="{{route('sobre')}}" id="meulink">SOBRE NÓS</a><br>
                    <a href="{{route('contato')}}" id="meulink">CONTATO</a></p>
                </div>
            </div>
            <div class="footer-copyright py-3 text-center">HERITAGE 2019 | TODOS OS DIREITOS RESERVADOS.</div>
        </div>
    </footer>

    <script type="text/javascript" src="/js/pace.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $('.mobile-btn').click(function(){
            $(this).toggleClass('active');
        });
    </script>

    </body>
</html>