@extends('layouts.master')

@section('content')

 <!-- Header -->
    <header class="bg-dark text-white">
        <div class="container text-center">
            <br>
            <br>
            <p class="lead">Estas un paso mas cerca de encontrar eso que tanto estabas buscando!</p>
        </div>
    </header>

    <section class="bg-home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mx-auto bg-light rounded">
                <div class="signup-form">
                        <form id="formulario" name="registerForm" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="col-8 offset-sm-2 text-center my-3">
                                <h2>Registrate</h2>
                                <p class="hint-text">Crea tu cuenta, solo te tomara unos minutos.</p>
                            </div>

                            <div class="form-group">
                                <input id="name" type="text" placeholder="Nombre y Apellido" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                                <div class="col-md-6">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <div id="errorEmail"></div>
                                <div class="col-md-6">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" placeholder="contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <div  id = "errorPassword"></div>
                                <div class="col-md-6">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                    <input id="passwordConfirm" type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required>                                
                                    <div  id = "errorPasswordConfirm"></div>
                                </div>

                            <div class="form-group col-10 m-auto col-sm-8 offset-sm-2">
                                <button type="submit" class="btn btn-lg btn-block bg-purple font-white">
                                    Registarse
                                </button>
                            </div>
                        </form>
                        <div class="text-center my-3">
                            Ya tenes una cuenta? <a href="login.php">Inicia sesion</a>
                        </div>
                </div>
            </div>
        </div>
    </div>


    </section>

    
@endsection
