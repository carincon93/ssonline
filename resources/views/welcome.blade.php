@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    @include('layouts.navbar-welcome')
    @if ($errors->has('token_error'))
    <!-- Modal -->
    <div class="modal fade" id="modalSession" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Sesión expirada</h4>
                </div>
                <div class="modal-body">
                    {{ $errors->first('token_error') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn new-btn-success">
                        <a href="{{ url('/') }}">Volver a la página principal</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="owl-carousel">
        <div class="o-item">
            <img src="{{ asset('images/img-capacidad.png') }}" alt="logo" class="img-responsive">
            <div class="container">
                <div class="carousel-text">
                    <p>Disponemos de la <strong>capacidad de respuesta</strong> necesaria que nos permite actuar en el momento y lugar adecuado.</p>
                    <a href="{{ url('capacidad_respuesta') }}" class="btn-link carousel-btn">Ver más</a>
                </div>
        </div>
        </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
    </div>
    <div class="logos-empresas">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/logo-visa.png') }}" alt="logo" class="img-responsive center-block">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/logo-paypal.png') }}" alt="logo" class="img-responsive center-block">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/logo-pse.png') }}" alt="logo" class="img-responsive center-block">
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-principal">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('images/logo-ssonline-blanco.png') }}" alt="logo" class="img-responsive logo-footer">
                </div>
                <div class="col-md-4">
                    <h3 class="titles-footer">Información</h3>
                    <ul class="list-unstyled list-footer">
                        <li>Soluciones y Servicios S.AS</li>
                        <li>NIT: 901005743-5</li>
                        <li><a href="mailto:alguncorreo@mail.com"><i class="fa fa-fw fa-envelope-o"></i>alguncorreo@mail.com</a></li>
                        <li><a href="tel:+57 302 258 7476"><i class="fa fa-fw fa-phone"></i>(+57) 302 258 7476</a></li>
                        <li><i class="fa fa-fw fa-map-marker"></i>Avenida 3 Norte - Número 26 n 25</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="titles-footer">Páginas</h3>
                    <ul class="list-unstyled list-footer">
                        <li><a href="{{ url('nosotros') }}">Nosotros</a></li>
                        <li><a href="{{ url('capacidad_respuesta') }}">Capacidad de respuesta</a></li>
                        <li><a href="{{ url('seguridad') }}">Seguridad</a></li>
                        <li><a href="{{ url('servicios') }}">Servicios</a></li>
                        <li><a href="{{ url('contactanos') }}">Contáctanos</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
    <div class="footer-welcome">
        <div class="container">
            <p>Todos los derechos reservados 2017.</p>
        </div>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    /**
    * @description Modal sesión expirada
    * Activa el modal en la página inicial cuando la sesión ha caducado
    */
    $(window).on('load', function () {
        $('#modalSession').modal({ backdrop: 'static', keyboard: false });
    });

    $(document).ready(function() {
        /**
         * @description Owl carousel
         */
        $(".owl-carousel").owlCarousel({
            items: 1
        });
    });
</script>
@endpush
