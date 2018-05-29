<div>
  {{ Form::label('moviment_id', 'Movimiento') }}
  {{ Form::select('moviment_id', $moviments, null, ['']) }}
</div>

<div class="form-group">
  {{ Form::label('product_id', 'Producto') }}
  {{ Form::select('product_id', $products, null, ['']) }}
</div>


<div class="form-group">
    {{ Form::label('date', 'Fecha') }}
    {{ Form::date('date', null, ['class' => 'form-control', 'id' => 'datepicker']) }}
</div>

<div class="form-group">
    {{ Form::label('cost', 'Costo') }}
    {{ Form::number('cost', null, ['class' => 'form-control', 'id' => 'cost']) }}
</div>
<div class="form-group">
    {{ Form::label('sell', 'Venta') }}
    {{ Form::number('sell', null, ['class' => 'form-control', 'id' => 'sell']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
