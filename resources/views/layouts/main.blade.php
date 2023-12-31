<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <style>
        @import "/font-awesome/css/font-awesome.css";
		@import "/font-awesome/css/font-awesome.min.css";
        </style>
    </head>
    <body >
        <header>
            <nav class="navbar navbar-expand-lg navbar.light">
               <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    BootCampEvents
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar Eventos</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Meus Eventos</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="nav-link" 
                            onclick="event.preventDefault();
                            this.closest('form').submit();">Sair</a>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    @endguest
                </ul>
               </div>
            </nav>
        </header>

        <main>
            <section class="container-fluid">
                <div class="row">
            @if (session('msg'))
                <p class="msg">{{session('msg')}}</p>
            @endif
            @yield('content')
                </div>
            </section>
        </main>
         
        <footer>
            <p>Direitos reservados: AndroSoft Eventos&copy; 2023</p>
        </footer>
    </body>
</html>