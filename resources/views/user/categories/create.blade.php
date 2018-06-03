@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Crear Categoria
                    @can ('categories.index')
                      <a href="{{ route('categories.index') }}" class="pull-right btn btn-sm btn-primary">
                          Inicio
                      </a>
                    @endcan
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'categories.store']) !!}

                        @include('user.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
