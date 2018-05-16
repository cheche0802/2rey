@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                      <h1>Lista de usuarios</h1>
                      @can ('users.create')
                        <a href="{{ route('users.create') }}" class="pull-right btn btn-primary">
                              Crear
                          </a>
                      @endcan
                      @can ('users.create')
                        <a href="{{ route('users.pdf') }}" class="pull-right btn btn-primary">
                              Descargar PDF
                          </a>
                      @endcan
                    <div class="row">
                        <div class="page-header pull-left">
                                {{ Form::open(['route'=> 'users.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}
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
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last }}</td>
                                <td>{{ $user->email }}</td>
                                @can ('users.show')
                                  <td width="10px">
                                      <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-default">Ver</a>
                                  </td>
                                @endcan
                            @can ('users.edit')
                              <td width="10px">
                                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-default">Editar</a>
                              </td>
                            @endcan
                          @can ('users.destroy')
                            <td width="10px">
                                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
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

                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
