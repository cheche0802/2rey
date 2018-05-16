@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">{{$product->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-capitalize">{{ Auth::user()->name }}</h6>
                        <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                        <ul>
                           <li class="text-capitalize"><strong>Categoria: </strong> {{$product->category->id}}</li>
                           <li class="text-capitalize"><strong>Nombre de Categoria: </strong> {{$product->category->name}}</li>
                              <li class="text-capitalize"><strong>Codigo: </strong> {{$product->code}}</li>
                            <li class="text-capitalize"><strong>Cantidad: </strong> {{$product->amount}}</li>
                            <li class="text-capitalize"><strong>Impuesto: </strong> {{$product->tax}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
