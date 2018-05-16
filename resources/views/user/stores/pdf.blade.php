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
                                    <th> Nombre</th>
                                    <th> Direccion</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($stores as $store)
                                <tr>

                                    <td>{{ $store->id }}</td>
                                    <td>{{ $store->name }}</td>
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
