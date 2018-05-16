@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Producto
                </div>

                <div class="panel-body">
                    {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

                        @include('user.products.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
