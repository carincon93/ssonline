@extends('layouts.app')

@section('title', 'Seguridad')

@section('content')
@include('layouts.navbar-pages')
<div class="seguridad">
    <div class="jumbotron">
        <h2 class="text-uppercase text-center title-seguridad animated fadeInUp">Seguridad</h2>
        <img src="{{ asset('images/logo-seguridad.png') }}" alt="" class="center-block img-responsive img-seguridad animated fadeInUp">
    </div>
    <div class="container section">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3 class="text-uppercase">Políticas de seguridad</h3>
                <ul class="list-politicas">
                    <li> Monitoreo transaccional de DIGICERT en línea ante vulnerabilidades y software malicioso. </li>
                    <li> Nuestra plataforma transaccional CWEB se encuentra en un Data Center. </li>
                    <li> Bloqueo automático de transacciones ante detecciones de fraude. </li>
                    <li> Sistema antifraude de transacciones. </li>
                    <li> Certificado de seguridad y de vulnerabilidades DIGICERT. </li>
                    <li> Acceso a la plataforma de pagos segura autorizado por Redeban. </li>
                    <li> Correo electrónico con confirmación de compra. </li>
                    <li> Monitoreo transaccional de DIGICERT en línea ante vulnerabilidades y software malicioso. </li>
                    <li> Nuestra plataforma transaccional SSONLINE cuenta con multiusuarios para cada propósito. </li>
                    <li> Bloqueo automático de transacciones ante detecciones de fraude. </li>
                    <li> Validación de identificación SIRI </li>
                    <li> Autonomía en montos por transacción. </li>
                    <li> Centro de control de transacciones de revisión manual. </li>
                    <li> Disponibilidad de switch transaccional superior a 99.9 %. </li>
                    <li> Soporte en línea a través de www.ssonline.co </li>
                </ul>
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
