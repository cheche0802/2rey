@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Almacen
                </div>

                <div class="panel-body">
                  {!! Form::model($store, ['route' => ['stores.update', $store->id], 'method' => 'PUT']) !!}

                      @include('user.stores.partials.form')

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
