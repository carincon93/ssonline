@extends('layouts.app')

@section('title', 'Seguridad')

@section('content')
@include('layouts.navbar-pages')
<div class="seguridad">
    <div class="jumbotron">
        <div class="container">
            <!-- <h2 class="text-uppercase text-center title-seguridad animated fadeInUp">Nosotros</h2> -->
            <div class="row desc-nosotros">
                <div class="col-md-6 logo-nosotros">
                    <img src="{{ asset('images/logo-ssonline-oscuro.png') }}" alt="" class="center-block img-responsive img-seguridad animated fadeInUp">
                </div>
                <div class="col-md-6">
                    <p class="text-nosotros animated fadeInUp">
                        SS online s.a.s es un mercado alternativo de pagos electrónicos que opera a nivel
                        nacional, ofreciendo a los establecimientos servicios de transacción electrónica a medida.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container section">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="sec-nosotros">
                    <div class="page-header">
                        <h3 class="text-uppercase text-center">Nuestra Misión</h3>
                    </div>
                    <p>
                        Posicionarnos como una empresa transaccional de alta flexibilidad, dentro de los más altos
                        estándares de servicio, capaz de brindar una rápida adecuación de las necesidades especificas
                        de nuestros clientes, ofreciendo amplios conocimientos en los procesos operativos y de
                        gestión, proporcionando calidad, eficiencia y resultado a la vanguardia de los requerimientos.
                        De manera paralela poder generar la mayor cantidad de empleos directos que colaboren al
                        fortalecimiento de nuestra institución y país.
                    </p>
                </div>

                <div class="sec-nosotros">
                    <div class="page-header">
                        <h3 class="text-uppercase text-center">Nuestra Visión</h3>
                    </div>
                    <p>
                        Ser una empresa reconocida de comercio electrónico en el mundo, preferida por la
                        eficiencia seguridad y transparencia en todos los procesos.
                    </p>
                </div>

                <div class="sec-nosotros">
                    <div class="page-header">
                        <h3 class="text-uppercase text-center">Antecedentes de la Compañía</h3>
                    </div>
                    <p>
                        Nuestra compañía orgullosamente Colombiana cuenta con un año como sociedad
                        constituida, sin embargo las personas que trabajamos en ella conformamos un equipo
                        multidisciplinario con más de 10 años de experiencia en el sector de servicios electrónicos,
                        procesos de BPO, desarrollo de proyectos dirigido a resolver la problemática de servicio al
                        cliente de diversas compañías. Nuestro objetivo empresarial es ofrecer soluciones integrales
                        que resuelvan las necesidades organizacionales y les ayuden a las empresas a tomar decisión
                        de alto valor para su empresa.
                    </p>
                </div>


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
</script>
@endpush
