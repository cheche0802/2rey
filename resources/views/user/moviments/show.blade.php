@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Movimientos
                </div>

                <div class="panel-body">
                    <p><strong>Nombre</strong> {{ $moviment->name }}</p>
                    <p><strong>Direeecion</strong> {{ $moviment->address }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
