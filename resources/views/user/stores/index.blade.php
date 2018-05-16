@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista de Almacenes
                    @can ('stores.create')
                      <a href="{{ route('stores.create') }}" class="pull-right btn btn-sm btn-primary">
                          Crear
                      </a>
                    @endcan
                    @can ('stores.pdf')
                      <a href="{{ route('stores.pdf') }}" class="btn btn-sm btn-info">
                          Descargar Almacenes en PDF
                      </a>
                    @endcan
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
                            @foreach($stores as $store)
                            <tr>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->address }}</td>
                                @can ('stores.show')
                                  <td width="10px">
                                      <a href="{{ route('stores.show', $store->id) }}" class="btn btn-sm btn-default">Ver</a>
                                  </td>
                                @endcan
                              @can ('stores.edit')
                                <td width="10px">
                                    <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                              @endcan
                            @can ('stores.destroy')
                              <td width="10px">
                                  {!! Form::open(['route' => ['stores.destroy', $store->id], 'method' => 'DELETE']) !!}
                                      <button class="btn btn-sm btn-danger">
                                          Eliminar
                                      </button>
                                  {!! Form::close() !!}
                              </td>
                            @endcan

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $stores->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
