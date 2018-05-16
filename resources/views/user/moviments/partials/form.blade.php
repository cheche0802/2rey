{{ Form::hidden('user_id',auth()->user()->id)}}

<div class="form-group">
    {{ Form::label('date', 'Fecha') }}
    {{ Form::text('date', null, ['class' => 'form-control', 'id' => 'datepicker']) }}
</div>


<div class="form-group">
    {{ Form::label('status', 'Entrada') }}
    {{ Form::radio('status', null, ['class' => 'form-control']) }}
    {{ Form::label('status', 'Salida') }}
    {{ Form::radio('status', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
  {{ Form::label('product_id', 'Producto') }}
  {{ Form::select('product_id', $product, null, ['class'=>'multiple']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripcion') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
