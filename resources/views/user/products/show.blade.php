@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Producto
                    @can ('products.index')
                      <a href="{{ route('products.index') }}" class="pull-right btn btn-sm btn-primary">
                          Inicio
                      </a>
                    @endcan
                </div>

                <div class="panel-body">
                  <p><strong>Categoria</strong> {{ $category_id->name }}</p>
                    <p><strong>Presentacion</strong> {{ $detail_id->delivery }}</p>
                    <p><strong>Codigo</strong> {{ $product->code }}</p>
                    <p><strong>Nombre</strong> {{ $product->name }}</p>
                    <p><strong>Cantidad</strong> {{ $product->amount }}</p>
                    <p><strong>Impuesto</strong> {{ $product->tax }}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
