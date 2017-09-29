@extends('layouts.app')

@section('title', 'Capacidad de respuesta')

@section('content')
@include('layouts.navbar-pages')
<div class="seguridad">
    <div class="jumbotron">
        <div class="container">
            <h2 class="text-uppercase text-center title-seguridad animated fadeInUp">Capacidad de respuesta</h2>
            <div class="page-header">
                <p class="text-center">
                    Disponemos de la capacidad de respuesta necesaria que nos permite actuar en el momento y lugar adecuado,
                    para aprovechar las oportunidades que presenten las diferentes variables del mercado.
                </p>
            </div>
            <img src="{{ asset('images/logo-headphones.png') }}" alt="" class="center-block img-responsive img-seguridad animated fadeInUp">
        </div>
    </div>
    <div class="container section">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="padding-article" data-aos="fade-up" data-aos-once="true">
                    <h3 class="text-uppercase text-center">Infraestructura Técnica</h3>
                    <img src="{{ asset('images/system.png') }}" alt="" class="img-responsive center-block">
                    <p>
                        Estamos  en capacidad de adaptarnos a su  sistema operacional y lineamiento requerido por sus áreas,
                        utilizando para esto, diferentes plataformas tecnológicas y diseñando  software a la medida, de acuerdo
                        con las necesidades de cada uno de sus proyectos.
                    </p>
                </div>
                <div class="padding-article" data-aos="fade-up" data-aos-once="true">
                    <h3 class="text-uppercase text-center">Mejoramiento Continuo</h3>
                    <img src="{{ asset('images/mejoramiento.png') }}" alt="" class="img-responsive center-block">
                    <p>
                        Una de las premisas es mantener e incrementar  estándares de calidad a través de varios mecanismos:
                    </p>
                    <ul>
                        <li>Medición por indicadores.</li>
                        <li>Formatos de mejoramiento continuo.</li>
                        <li>Sistemas de Monitoreo permanente de desempeño a través de sistemas de estadísticas en tiempo real de productividades individuales, por grupo de trabajo y por proyecto.</li>
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
    AOS.init({
      offset: 200,
      duration: 600,
      easing: 'ease-in-sine',
      delay: 100,
    });
</script>
@endpush
