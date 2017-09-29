@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
@include('layouts.navbar-pages')
<div class="seguridad">
    <div class="jumbotron">
        <div class="container">
            <h2 class="text-uppercase text-center title-seguridad animated fadeInUp">Servicios</h2>
            <i class="fa fa-handshake-o center-block text-center logo-servicios animated fadeInUp"></i>
        </div>
    </div>
    <div class="container section">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="padding-article">
                    <h3 class="text-uppercase">Servicios estratégicos</h3>
                    <ul class="list-politicas">
                        @foreach($servicios as $servicio)
                        @if($servicio->tipo_servicio == 'servicios estrategicos')
                        <li>{{ $servicio->descripcion }}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <div class="padding-article">
                    <h3 class="text-uppercase">Servicios tecnológicos</h3>
                    <ul class="list-politicas">
                        @foreach($servicios as $servicio)
                        @if($servicio->tipo_servicio == 'servicios tecnologicos')
                        <li>{{ $servicio->descripcion }}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                <div class="padding-article">
                    <h3 class="text-uppercase">Servicios interactivos</h3>
                    <ul class="list-politicas">
                        @foreach($servicios as $servicio)
                        @if($servicio->tipo_servicio == 'servicios interactivos')
                        <li>{{ $servicio->descripcion }}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        Todos los derechos reservados 2017.
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
</script>
@endpush
