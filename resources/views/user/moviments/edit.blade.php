@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Movimiento
                </div>

                <div class="panel-body">
                  {!! Form::model($store, ['route' => ['moviments.update', $store->id], 'method' => 'PUT']) !!}

                      @include('user.moviments.partials.form')

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
