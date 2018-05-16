@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detalle</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->name }}</h6>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                  <th> Categoria</th>
                                   <th> Categoria</th>
                                   <th> Codigo</th>
                                    <th> Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $detail)
                                <tr>
                                    <td>{{ $detail->category_id }}</td>
                          
                                    <td>{{ $detail->delivery }}</td>
                                    <td>{{ $detail->description }}</td>
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
