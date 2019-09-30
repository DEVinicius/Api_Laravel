<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/croppie.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

        <title>@yield('titulo')</title>

        <link rel="icon" href="storage/Geral/Icon.png">

        @hasSection('perfilHeader')
            @yield('perfilHeader')
        @endif

        @hasSection('calendario')
            @yield('calendario')
        @endif

    </head>
    <body>


    @if(session('nivel_usuario') == 0 || !session()->has('nivel_usuario'))
    <nav class="navbar navbar-expand-lg navbar-dark container-fluid bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand mb-0" href="{{route('index')}}"><img src="storage/MenuFooter/LogoMenu.png" alt="Página Inicial" class="img-fluid logoMenu"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mobile-btn"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('planos')}}">PLANOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sobre')}}">SOBRE NÓS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contato')}}">CONTATO</a>
                    </li>
                </ul>
            </div>
            @if((session('nome')) != null)
            <div class="dropdown">
                <div class="textLogin text-uppercase dropdown">
                    olá, {{session('nome')}} &nbsp;
                    @if(session('foto') == null)
                        <img src="storage/MenuFooter/User.png">
                    @else
                        <img src="storage/fotos/{{ session('foto') }}" class="fotoPerfilMenu">
                    @endif
                </div>
                <div class="dropdown-content" style="margin-left: -30px; width: 190px;">
                    <a href="{{route('perfil')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/PerfilLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/PerfilDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/PerfilHover.png">
                        &nbsp;&nbsp;PERFIL
                    </a>
                @if(session('nivel_usuario') == 1 || session('nivel_usuario') == 2 )
                    <a href="{{route('home')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/HeritageLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/HeritageDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/HeritageHover.png">
                        &nbsp;&nbsp;HERITAGE
                    </a>
                @endif
                    <div class="dropdown-divider m-0"></div>
                    <a href="{{route('logout')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/SairLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/SairDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/SairHover.png">
                        &nbsp;&nbsp;SAIR
                    </a>
                </div>
            </div>
            @else
                <a href="{{route('login')}}" class="btnLogin float-right">LOGIN | CADASTRO</a>
            @endif
        </div>
    </nav>
    @endif
    @if(session('nivel_usuario') == 1)
    <nav class="navbar navbar-expand-lg navbar-dark container-fluid bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand mb-0" href="{{route('home')}}"><img src="storage/MenuFooter/LogoMenu.png" alt="Página Inicial" class="img-fluid logoMenu"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mobile-btn"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ambientes')}}">AMBIENTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('patrimonioEmpresa')}}">PATRIMÔNIOS</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <div class="nav-link dropdown">USUÁRIOS</div>
                            <div class="dropdown-content">
                                <a href="{{route('administradores')}}">ADMINISTRADORES</a>
                                <a href="{{route('gerenciadores')}}">GERENCIADORES</a>
                                <a href="{{route('suportes')}}">SUPORTES</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <div class="nav-link dropdown">BACKUPS</div>
                            <div class="dropdown-content">
                                <a href="{{route('verificaBackup')}}">VERIFICAR BACKUP ANTERIORES</a>
                                <a href="{{route('dataBackup')}}">DELIMITAR DATA PARA BACKUP</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('historico')}}">HISTÓRICO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../View/chat.php">CHAT</a>
                    </li>
                </ul>
            </div>
            @if((session('nome')) != null)
            <div class="dropdown">
                <div class="textLogin text-uppercase dropdown">
                    olá, {{session('nome')}} &nbsp;
                    @if(session('foto') == null)
                        <img src="storage/MenuFooter/User.png">
                    @else
                        <img src="storage/Fotos/{{ session('foto') }}" class="fotoPerfilMenu">
                    @endif
                </div>
                <div class="dropdown-content" style="margin-left: -30px; width: 190px;">
                    <a href="{{route('perfil')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/PerfilLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/PerfilDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/PerfilHover.png">
                        &nbsp;&nbsp;PERFIL
                    </a>
                    <a href="{{route('empresa')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/EmpresaLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/EmpresaDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/EmpresaHover.png">
                        &nbsp;&nbsp;EMPRESA
                    </a>
                    <a href="{{route('comoUsar')}}"  class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ComoUsarLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ComoUsarDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/ComoUsarHover.png">
                        &nbsp;&nbsp;COMO USAR
                    </a>
                    <a class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ModoEscuroLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ModoEscuroDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/ModoEscuroHover.png">
                        &nbsp;&nbsp;MODO ESCURO&nbsp;
                        <label class="switch">
                            <input type="checkbox" id="night-mode" aria-label="night-mode">
                            <span class="slider round"></span>
                        </label>
                    </a>
                        <div class="dropdown-divider"></div>
                    <a href="{{route('logout')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/SairLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/SairDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/SairHover.png">
                        &nbsp;&nbsp;SAIR
                    </a>
                </div>
            </div>
            @endif
        </div>
    </nav>
    @endif

    @if(session('nivel_usuario') == 2)
    <nav class="navbar navbar-expand-lg navbar-dark container-fluid bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand mb-0" href="{{route('home')}}"><img src="storage/MenuFooter/LogoMenu.png" alt="Página Inicial" class="img-fluid logoMenu"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="mobile-btn"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ambientes')}}">AMBIENTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('patrimonioEmpresa')}}">PATRIMÔNIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('suportes')}}">SUPORTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('verificaBackup')}}">BACKUP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('historico')}}">HISTÓRICO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../View/chat.php">CHAT</a>
                    </li>
                </ul>
            </div>
            @if((session('nome')) != null)
            <div class="dropdown">
                <div class="textLogin text-uppercase dropdown">
                    olá, {{session('nome')}} &nbsp;
                    @if(session('foto') == null)
                        <img src="storage/MenuFooter/User.png">
                    @else
                        <img src="storage/fotos/{{ session('foto') }}" class="fotoPerfilMenu">
                    @endif
                </div>
                <div class="dropdown-content" style="margin-left: -30px; width: 190px;">
                    <a href="{{route('perfil')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/PerfilLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/PerfilDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/PerfilHover.png">
                        &nbsp;&nbsp;PERFIL
                    </a>
                    <a href="{{route('comoUsar')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ComoUsarLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ComoUsarDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/ComoUsarHover.png">
                        &nbsp;&nbsp;COMO USAR
                    </a>
                    <a class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ModoEscuroLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/ModoEscuroDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/ModoEscuroHover.png">
                        &nbsp;&nbsp;MODO ESCURO&nbsp;
                        <label class="switch">
                            <input type="checkbox" id="night-mode" aria-label="night-mode">
                            <span class="slider round"></span>
                        </label>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{route('logout')}}" class="img-box py-2 px-3">
                        <div id="show">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/SairLight.png">
                        </div>
                        <div id="hideImg">
                            <img class="img-default float-left img-fluid mt-1" src="storage/MenuFooter/SairDark.png">
                        </div>
                        <img class="img-hover float-left img-fluid mt-1" src="storage/MenuFooter/SairHover.png">
                        &nbsp;&nbsp;SAIR
                    </a>
                </div>
            </div>
            @endif
        </div>
    </nav>
    @endif
