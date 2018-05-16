@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Detalle
                </div>

                <div class="panel-body">
                    {!! Form::model($detail, ['route' => ['details.update', $detail->id], 'method' => 'PUT']) !!}

                        @include('user.details.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
