@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Almacen
                    @can ('stores.index')
                      <a href="{{ route('stores.index') }}" class="pull-right btn btn-sm btn-primary">
                          Inicio
                      </a>
                    @endcan
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'stores.store']) !!}

                        @include('user.stores.partials.form')

                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
