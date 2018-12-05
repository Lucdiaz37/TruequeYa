@extends('layouts.master')

@section('content')


    <!-- Header -->
    <header class="bg-dark text-white">
        <div class="container text-center">
            <br>
            <br>
            <p class="lead">La plataforma online numero uno de trueques en la Argentina</p>
        </div>
    </header>

    <section class="bg-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 mx-auto bg-light rounded">
                        <div class="signup-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="col-8 offset-2 text-center mt-3">
                                    <h2>Iniciar Sesion</h2>
                                    <p class="hint-text">Introduzca su correo y contraseña.</p>
                                </div>	

                                <div class="form-group">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    <div class="col-md-6">
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                                    <div class="col-md-6">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="btn btn-lg btn-block bg-purple font-white">
                                            {{ __('Iniciar Sesión') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu contraseña?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
