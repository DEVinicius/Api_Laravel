    @if(session('nivel_usuario') == 0 || !session()->has('nivel_usuario'))
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
    @endif
    @if(session('nivel_usuario') == 1)
    <div class="container" style="margin-top: 5%">
        <hr style="height: 1px; background-color: #C0C0C0;">
    </div>
    <footer class="page-footer font-small unique-color-dark mt-4 bg-transparent">
        <div class="container text-center text-md-left mt-2">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="storage/MenuFooter/LogoMenu.png" class="img-fluid" alt="Logo" style="margin-top: 100px">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold footer-line">USUÁRIOS</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('administradores')}}" id="meulink">ADMINISTRADORES</a><br>
                    <a href="{{route('gerenciadores')}}" id="meulink">GERENCIADORES</a><br>
                    <a href="{{route('suportes')}}" id="meulink">SUPORTES</a></p>
                    <h6 class="text-uppercase font-weight-bold footer-line">BACKUPS</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('verificaBackup')}}" id="meulink">BACKUPS ANTERIORES</a><br>
                    <a href="{{route('dataBackup')}}" id="meulink">DELIMITAR DATA</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold footer-line">MAPA DO SITE</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('home')}}" id="meulink">HOME</a><br>
                    <a href="{{route('perfil')}}" id="meulink">PERFIL</a><br>
                    <a href="{{route('ambientes')}}" id="meulink">AMBIENTES</a><br>
                    <a href="{{route('patrimonioEmpresa')}}" id="meulink">PATRIMÔNIOS</a><br>
                    <a href="{{route('empresa')}}" id="meulink">EMPRESA</a><br>
                    <a href="{{route('historico')}}" id="meulink">HISTÓRICO</a><br>
                    <a href="../View/chat.php" id="meulink">CHAT</a></p>
                </div>
            </div>
            <div class="footer-copyright py-3 text-center">HERITAGE 2019 | TODOS OS DIREITOS RESERVADOS.</div>
        </div>
    </footer>
    @endif

    @if(session('nivel_usuario') == 2)
    <div class="container" style="margin-top: 5%">
        <hr style="height: 1px; background-color: #C0C0C0;">
    </div>
    <footer class="page-footer font-small unique-color-dark" style="background-color: transparent; margin-top: 20px;">
        <div class="container text-center text-md-left mt-2">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <img src="storage/MenuFooter/LogoMenu.png" class="img-fluid" alt="Logo" style="margin-top: 50px">
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold footer-line">USUÁRIO</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('perfil')}}" id="meulink">PERFIL</a><br>
                    <a href="../View/chat.php" id="meulink">CHAT</a><br>
                    <a href="{{route('suportes')}}" id="meulink">SUPORTES</a><br>
                    <a href="{{route('verificaBackup')}}" id="meulink">BACKUP</a></p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold footer-line">MAPA DO SITE</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto footer-line-title">
                    <p><a href="{{route('home')}}" id="meulink">HOME</a><br>
                    <a href="{{route('ambientes')}}" id="meulink">AMBIENTES</a><br>
                    <a href="{{route('patrimonioEmpresa')}}" id="meulink">PATRIMÔNIOS</a><br>
                    <a href="{{route('historico')}}" id="meulink">HISTÓRICO</a></p>
                </div>
            </div>
            <div class="footer-copyright py-3 text-center">HERITAGE 2019 | TODOS OS DIREITOS RESERVADOS.</div>
        </div>
    </footer>
    @endif

    <script type="text/javascript" src="js/NightMode.js"></script>
    <script type="text/javascript" src="js/pace.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @hasSection('perfilFooter')
        @yield('perfilFooter')
    @endif

    <script>
        $('.mobile-btn').click(function(){
            $(this).toggleClass('active');
        });
    </script>

    </body>
</html>
