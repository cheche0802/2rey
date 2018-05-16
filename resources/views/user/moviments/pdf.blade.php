@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">PRODUCTOS</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ Auth::user()->name }}</h6>

                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Numero </th>
                                    <th> Fecha</th>
                                    <th> Producto</th>
                                    <th> Nombre</th>
                                    <th> descripcion</th>
                                    <th> Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($movimets as $movimet)
                                <tr>
                                    <td>{{ $movimet->id }}</td>
                                    <td>{{ $movimet->date }}</td>
                                    <td>{{ $movimet->status }}</td>
                                    <td>{{ $movimet->product->code }}</td>
                                    <td>{{ $movimet->product->name }}</td>
                                    <td>{{ $movimet->description }}</td>
                                    <td>{{ $movimet->amount }}</td>

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
