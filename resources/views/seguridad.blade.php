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
                <ul class="list-politicas list-poli">
                    @foreach($politicas as $politica)
                        <li>{{ $politica->descripcion }}</li>
                    @endforeach
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
