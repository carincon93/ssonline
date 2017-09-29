@extends('layouts.dashboard')

@section('title', 'Adquirir servicios')

@section('content')
<div class="dashboard-content">
    @include('layouts.messages')
    <!-- Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-capitalize" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                    El servicio ha sido adquirido con éxito!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h3>Servicios</h3>
        @foreach($servicios->chunk(2) as $chunk)
        <div class="row">
            @foreach($chunk as $servicio)
                <div class="col-md-6">
                    <div class="card-servicios">
                        <p>{{ $servicio->descripcion }}</p>
                        <form action="" id="form-adquirir" method="POST">
                            {{ csrf_field() }}
                            <button class="agregar-servicio" type="button" data-servicio="{{ $servicio->descripcion }}" data-usuario="{{ Auth::user()->name }}" data-email="{{ Auth::user()->email }}" data-toggle="modal" data-target="#myModal">Adquirir servicio</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>

@endsection
