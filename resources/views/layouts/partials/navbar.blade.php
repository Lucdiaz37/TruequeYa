    <nav class="navbar navbar-expand-lg bg-purple fixed-top">
                <img class="logo" href="/home" src="{{ asset('img/logo.png') }}">
                <a class="navbar-brand font-white" href="/home">TruequeYa</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><img src="data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E" alt=""></span>
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
                            <a class="nav-link font-white" href="/users/{{ Auth::user()->id }}">Tu perfil</a>
                        </li> 

                    @endguest
                  </ul>
                </div>
        </nav>