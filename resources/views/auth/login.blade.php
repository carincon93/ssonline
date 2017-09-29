@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-wrapper">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img src="{{ asset('images/logo-ssonline-oscuro.png') }}" alt="logo" class="img-responsive center-block">
                    </div>

                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Dirección de correo electrónico" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="checkbox checkbox-login">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-login">
                                    Iniciar sesión
                                </button>

                                <div class="form-separator">
                                    <span class="text-separator">o</span>
                                </div>

                                <a href="{{ route('register') }}" class="btn btn-link btn-register">
                                    Registrarse
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="footer footer-login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <ul class="list-unstyled inline-list">
                    <li><a href="{{ url('seguridad') }}">Seguridad</a></li>
                    <li><a href="{{ url('servicios') }}">Servicios</a></li>
                    <li><a href="{{ url('contactanos') }}">Contáctanos</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
