<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>trueque</title>
</head>
<body>
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
                <span class="navbar-toggler-icon leftmenutrigger"></span>
                <a class="navbar-brand" href="/home">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav ml-md-auto d-md-flex">

                        @guest

                        <li class="nav-item">
                            <a class="nav-link font-white" href="/home">Inicio</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link font-white" href="{{ route('register') }}">Registrate</a>
                        </li>
        
                        <li class="nav-item">
                            <a class="nav-link font-white" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>

                    @else
    
                        <li class="nav-item">
                            <a class="nav-link font-white" href="/products">Productos</a>
                        </li> 
        
                        <li class="nav-item">
                            <a class="nav-link font-white" href="{{ route('logout') }}" 
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar Sesion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li> 
        
                        <li class="nav-item">
                            <a class="nav-link font-white" href="#">Tu perfil</a>
                        </li> 

                    @endguest
                  </ul>
                </div>
        </nav>

    <main class="py-4">
        @yield('content')
    </main>

    
</body>
</html>