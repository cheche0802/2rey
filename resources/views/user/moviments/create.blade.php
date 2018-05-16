@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Control de Entrada y Salida
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'moviments.store']) !!}

                        @include('user.moviments.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
