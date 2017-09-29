@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row register-wrapper">
                <div class="col-md-6">
                    <h3>Crea una cuenta para empezar a disfrutar de nuestros servicios</h3>
                    <ul>
                        <li>Transacción electrónica.</li>
                        <li>Implantación e implementación de tecnología de punta.</li>
                        <li>Diseño y Desarrollo de websites.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p>
                        Diligencia el siguiente formulario.
                        El registro es totalmente gratis.
                    </p>
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Dirección de correo electrónico">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sitio_web') ? ' has-error' : '' }}">
                            <div class="">
                                <input id="sitio_web" type="sitio_web" class="form-control" name="sitio_web" value="{{ old('sitio_web') }}" required placeholder="Sitio web">

                                @if ($errors->has('sitio_web'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sitio_web') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-register">
                                Registrarse
                            </button>
                        </div>
                    </form>
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
