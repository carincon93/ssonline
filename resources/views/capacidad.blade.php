@extends('layouts.app')

@section('title', 'Seguridad')

@section('content')
@include('layouts.navbar-pages')
<div class="seguridad">
    <div class="jumbotron">
        <h2 class="text-uppercase text-center title-seguridad animated fadeInUp">Capacidad de respuesta</h2>
        <img src="{{ asset('images/logo-headphones.png') }}" alt="" class="center-block img-responsive img-seguridad animated fadeInUp">
    </div>
    <div class="container section">
        <div class="page-header">
            <p>
                Disponemos de la capacidad de respuesta necesaria que nos permite actuar en el momento y lugar adecuado,
                para aprovechar las oportunidades que presenten las diferentes variables del mercado.
            </p>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="padding-article">
                    <h3 class="text-uppercase">Infraestructura Técnica</h3>
                    <p>
                        Estamos  en capacidad de adaptarnos a su  sistema operacional y lineamiento requerido por sus áreas,
                        utilizando para esto, diferentes plataformas tecnológicas y diseñando  software a la medida, de acuerdo
                        con las necesidades de cada uno de sus proyectos.
                    </p>
                </div>
                <div class="padding-article">
                    <h3 class="text-uppercase">Mejoramiento Continuo</h3>
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
</script>
@endpush
