@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Historia
                </div>

                <div class="panel-body">
                    <p><strong>Cedula</strong> {{ $history->cedula }}</p>
                    <p><strong>Nombre</strong> {{ $history->name }}</p>
                    <p><strong>Apellido</strong> {{ $history->last }}</p>
                    <p><strong>Correo</strong> {{ $history->email }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
