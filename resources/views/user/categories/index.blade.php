@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                      <h1>Lista de Categorias</h1>
                      @can ('categories.create')
                        <a href="{{ route('categories.create') }}" class="pull-right btn btn-primary">
                              Crear
                          </a>
                      @endcan
                  @can ('categories.pdf')
                    <a href="{{ route('categories.pdf') }}" class="btn btn-sm btn-info">
                        Descargar Categorias en PDF
                    </a>
                  @endcan

                    <div class="row">
                        <div class="page-header pull-left">
                                {{ Form::open(['route'=> 'categories.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])}}
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
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                @can ('categories.show')
                                <td width="10px">
                                    <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                @endcan
                                @can ('categories.edit')
                               <td width="10px">
                                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                @endcan
                                @can ('categories.destroy')
                                      <td width="10px">
                                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
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

                    {{ $categories->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
