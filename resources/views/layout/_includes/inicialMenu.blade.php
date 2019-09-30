<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset= "UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <title>@yield('titulo')</title>

        <link rel="icon" href="storage/Geral/Icon.png">
        
    </head>
    <body>

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
                <div class="dropdown-content" style="margin-left: -20px; width: 190px;">
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