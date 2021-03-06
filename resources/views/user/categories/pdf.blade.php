@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Category</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->name }}</h6>
                        @can ('categories.index')
                          <a href="{{ route('categories.index') }}" class="pull-right btn btn-sm btn-primary">
                              Inicio
                          </a>
                        @endcan
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th> Codigo</th>
                                    <th> Nombre</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
