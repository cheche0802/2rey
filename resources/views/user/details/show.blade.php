@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Ver Detalle
                </div>

                <div class="panel-body">
                    <p><strong>Codigo de la categoria</strong> {{ $detail->category_id }}</p>
                    <p><strong>Nombre de la categoria</strong> {{ $cate->name }}</p>
                    <p><strong>Nombre del Detalle</strong> {{ $detail->delivery }}</p>
                    <p><strong>descripcion</strong> {{ $detail->description }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
