@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Usuario
                </div>

                <div class="panel-body">
                    <p><strong>Cedula</strong> {{ $user->cedula }}</p>
                    <p><strong>Nombre</strong> {{ $user->name }}</p>
                    <p><strong>Apellido</strong> {{ $user->last }}</p>
                    <p><strong>Correo</strong> {{ $user->email }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
