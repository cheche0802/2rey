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
                                   <th> Numero</th>
                                    <th> Categoria</th>
                                    <th> Detalle</th>
                                    <th> Codigo</th>
                                    <th> Producto</th>
                                    <th> Cantidad</th>
                                    <th> Impuesto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->detail->delivery }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->amount }}</td>
                                    <td>{{ $product->tax }}</td>
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
