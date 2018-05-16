@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-heading">
                    <h1>Lista de Detalles</h1>
                    @can ('details.create')
                      <a href="{{ route('details.create') }}" class="pull-right btn btn-primary">
                            Crear
                        </a>
                    @endcan
                @can ('details.pdf')
                  <a href="{{ route('details.pdf') }}" class="btn btn-sm btn-info">
                      Descargar Detalles en PDF
                  </a>
                @endcan


                  <div class="row">
                      <div class="page-header pull-left">
                              {{ Form::open(['route'=> 'details.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}

                                <div class="form-group">
                                  {{ Form::text('delivery', null, ['class' => 'form-control', 'placeholder'=> 'presentacion']) }}
                                </div>
                                <div class="form-group">
                                  {{ Form::text('description', null, ['class' => 'form-control', 'placeholder'=> 'descripcion']) }}
                                </div>
                                <div class="form-group">
                                  <button type="submit" class="btn btn-md btn-default">
                                      <span class="glyphicon glyphicon-search"></span>
                                  </button>
                                </div>
                              {{ Form::close() }}
                      </div>
                    </div>
              </div>                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Categoria</th>
                                <th>Presentacion</th>
                                <th> Descripcion </th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $detail)
                            <tr>
                                <td>{{ $detail->category_id }}</td>
                                <td>{{ $detail->delivery }}</td>
                                <td>{{ $detail->description }}</td>
                                @can ('details.show')
                                  <td width="10px">
                                      <a href="{{ route('details.show', $detail->id) }}" class="btn btn-sm btn-default">Ver</a>
                                  </td>
                                @endcan

                                @can ('details.edit')
                                  <td width="10px">
                                      <a href="{{ route('details.edit', $detail->id) }}" class="btn btn-sm btn-default">Editar</a>
                                  </td>
                                @endcan

                                @can ('details.destroy')
                                  <td width="10px">
                                      {!! Form::open(['route' => ['details.destroy', $detail->id], 'method' => 'DELETE']) !!}
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

                    {{ $details->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
