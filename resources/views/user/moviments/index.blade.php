@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Movimientos

                    <a href="{{ route('moviments.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>

                    <a href="{{ route('products.create') }}" class="pull-right btn btn-sm btn-success">
                        Nuevo Producto
                    </a>

              
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Direccion </th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($moviments as $moviment)
                            <tr>
                                <td>{{ $moviment->id }}</td>
                                <td>{{ $moviment->name }}</td>
                                <td>{{ $moviment->address }}</td>
                                <td width="10px">
                                    <a href="{{ route('moviments.show', $moviment->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('moviments.edit', $moviment->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['moviments.destroy', $moviment->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $moviments->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
