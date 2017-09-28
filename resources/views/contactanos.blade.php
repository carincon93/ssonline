@extends('layouts.app')

@section('title', 'Contáctanos')

@section('content')
@include('layouts.navbar-pages')
<div class="clearfix contact">
    <div class="col-md-6 no-padding left-part-contact">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-uppercase text-center title-contact">Contáctanos</h1>
            <p class="text-center">
                Si tiene preguntas o consultas, rellene el siguiente formulario para ponerse en contácto con nosotros. Gracias.
            </p>
            <form action="" method="POST" id="form-contact">
                <div class="form-group">
                    <input name="nombre" type="text" class="form-control input-contactanos" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control input-contactanos" placeholder="Email">
                </div>
                <div class="form-group">
                    <textarea name="mensaje" rows="2" class="form-control text-contact" placeholder="Mensaje"></textarea>
                </div>
                <button class="btn center-block btn-contactanos">Enviar mensaje</button>
            </form>
            <div>
                <ul class="list-unstyled text-center info-contact">
                    <li><a href="mailto:alguncorreo@mail.com"><i class="fa fa-fw fa-envelope-o"></i>alguncorreo@mail.com</a></li>
                    <li><a href="tel:+57 302 258 7476"><i class="fa fa-fw fa-phone"></i>(+57) 302 258 7476</a></li>
                    <li><i class="fa fa-fw fa-map-marker"></i>Avenida 3 Norte - Número 26 n 25</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6 no-padding" id="googleMap">

    </div>
</div>
<div class="footer">
    <div class="container">
        Todos los derechos reservados 2017.
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/googlemaps.js') }}" charset="utf-8"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACzvbJ4E9TUEi6FmtHuwn1EMKXLvGQtZw&callback=myMap" charset="utf-8"></script>
@endpush
