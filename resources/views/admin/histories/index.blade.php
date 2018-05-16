@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                      <h1>Lista de Historia</h1>
                      @can ('histories.create')
                        <a href="{{ route('histories.create') }}" class="pull-right btn btn-primary">
                              Crear
                          </a>
                      @endcan

                    <div class="row">
                        <div class="page-header pull-left">
                                {{ Form::open(['route'=> 'histories.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}
                                  <div class="form-group">
                                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nombre']) }}
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-default">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                  </div>
                                {{ Form::close() }}
                        </div>
                      </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Costo</th>
                                <th>Venta</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($histories as $history)
                            <tr>

                                <td>{{ $history->date }}</td>
                                <td>{{ $history->cost }}</td>
                                <td>{{ $history->sell }}</td>
                                @can ('histories.show'
                                  <td width="10px">
                                      <a href="{{ route('histories.show', $history->id) }}" class="btn btn-sm btn-default">Ver</a>
                                  </td>
                                @endcan
                             @can ('histories.edit')
                               <td width="10px">
                                   <a href="{{ route('histories.edit', $history->id) }}" class="btn btn-sm btn-default">Editar</a>
                               </td>
                             @endcan
                            @can ('histories.destroy')
                              <td width="10px">
                                  {!! Form::open(['route' => ['histories.destroy', $history->id], 'method' => 'DELETE']) !!}
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

                    {{ $histories->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
